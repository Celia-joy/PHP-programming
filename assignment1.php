<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Handling - Group 3 (Read & Modify File Content)</title>
    <style>
        :root {
            --primary: #FFFFFF;
            --secondary: rgb(153, 191, 233);
            --button: rgb(166, 212, 230);
            --accent: #4a90e2;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px;
            background-color: var(--secondary);
            color: #333;
            line-height: 1.6;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
        }
        .box {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 25px;
            background: var(--primary);
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            border-radius: 16px;
        }
        h3 {
            margin-top: 0;
            color: var(--accent);
        }
        pre {
            background: #f8f9fa;
            padding: 12px;
            border-radius: 8px;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
            border: 1px solid #eee;
        }
        textarea {
            width: 100%;
            height: 180px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            resize: vertical;
            font-family: inherit;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }
        button, input[type="submit"] {
            padding: 10px 18px;
            margin: 6px 8px 6px 0;
            background: var(--button);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.2s;
        }
        button:hover, input[type="submit"]:hover {
            background: rgb(140, 190, 220);
        }
        .delete-btn {
            background: #e74c3c;
            color: white;
        }
        .delete-btn:hover {
            background: #c0392b;
        }
        .highlight {
            background-color: #fff176;
            font-weight: bold;
            padding: 2px 4px;
            border-radius: 3px;
        }
        .formatting-buttons input[type="submit"] {
            background: #3498db;
            color: white;
        }
        .formatting-buttons input[type="submit"]:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<h2>Group 3 – Read and Modify File Content</h2>

<?php
$filename = "maths.txt";           // ← change this to your desired default file
$content = "";

// Load file content (used by most sections)
if (file_exists($filename)) {
    $content = file_get_contents($filename);
}
?>

<!-- 1. Display File Content -->
<div class="box">
    <h3>1. Display File Content on Web Page</h3>
    <pre><?php echo htmlspecialchars($content ?: "File not found or empty."); ?></pre>
</div>

<!-- 2. Search in File Content -->
<div class="box">
    <h3>2. Search in File Content</h3>
    <form method="post">
        <input type="text" name="search" placeholder="Enter word or phrase to search..." required>
        <button type="submit" name="searchBtn">Search</button>
    </form>

    <?php if (isset($_POST['searchBtn'])): 
        $word = trim($_POST['search']);
        if ($word !== '' && $content !== '') {
            $found = stripos($content, $word) !== false;
            $highlighted = str_ireplace(
                $word,
                '<span class="highlight">' . htmlspecialchars($word) . '</span>',
                htmlspecialchars($content)
            );
    ?>
        <p style="margin-top:15px;">
            <?= $found ? "Found: <b>" . htmlspecialchars($word) . "</b>" : "Not found." ?>
        </p>
        <pre><?= $highlighted ?></pre>
    <?php } else { ?>
        <p style="color:#e67e22;">Please enter a search term.</p>
    <?php } endif; ?>
</div>

<!-- 3. Modify & Save Changes -->
<div class="box">
    <h3>3. Modify & Save Changes</h3>
    <form method="post">
        <textarea name="newContent" required><?= htmlspecialchars($content) ?></textarea><br>
        <button type="submit" name="save">Save Changes</button>
    </form>

    <?php if (isset($_POST['save'])):
        $newContent = $_POST['newContent'];
        if ($newContent !== '') {
            $handle = fopen($filename, 'w');
            if ($handle) {
                fwrite($handle, $newContent);
                fclose($handle);
                $content = $newContent; // refresh displayed content
                echo '<p style="color:#27ae60; font-weight:bold;">Changes saved successfully.</p>';
            } else {
                echo '<p style="color:#e74c3c;">Cannot write to file (check permissions).</p>';
            }
        }
    endif; ?>
</div>

<!-- 4. Format File Content -->
<div class="box">
    <h3>4. Format File Content</h3>

    <?php
    if ($content === '') {
        echo '<p style="color:#e67e22;">No content to format.</p>';
    } else {
        if (isset($_POST['uppercase'])) {
            echo nl2br(strtoupper($content));
        } elseif (isset($_POST['lowercase'])) {
            echo nl2br(strtolower($content));
        } else {
            // Improved sentence case – works better with lists & line breaks
            $text = strtolower($content);

            // Capitalize after . ! ? + whitespace
            $text = preg_replace_callback(
                '/([.!?]\s+|^)([a-z])/',
                fn($m) => $m[1] . strtoupper($m[2]),
                $text
            );

            // Capitalize after new lines (very useful for your assignment-style text)
            $text = preg_replace_callback(
                '/(\r\n|\n|\r)([a-z])/',
                fn($m) => $m[1] . strtoupper($m[2]),
                $text
            );

            // First character safety net
            if (strlen($text) > 0 && ctype_lower($text[0])) {
                $text[0] = strtoupper($text[0]);
            }

            echo nl2br($text);
        }
    }
    ?>

    <form method="post" class="formatting-buttons" style="margin-top:20px;">
        <label>Change case:</label><br><br>
        <input type="submit" value="Uppercase"     name="uppercase">
        <input type="submit" value="Lowercase"     name="lowercase">
        <input type="submit" value="Sentence case" name="sentencecase">
    </form>
</div>

<!-- 5. Delete File -->
<div class="box">
    <h3>5. Delete File</h3>
    <form method="post">
        <button type="submit" name="delete" class="delete-btn" onclick="return confirm('Really delete the file?');">
            Delete File
        </button>
    </form>

    <?php if (isset($_POST['delete'])):
        if (file_exists($filename)) {
            if (unlink($filename)) {
                $content = "";
                echo '<p style="color:#e67e22; font-weight:bold;">File deleted successfully.</p>';
            } else {
                echo '<p style="color:#e74c3c;">Cannot delete file (permissions?).</p>';
            }
        } else {
            echo '<p>File does not exist.</p>';
        }
    endif; ?>
</div>

</body>
</html>