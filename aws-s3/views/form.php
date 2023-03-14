<html>
  <head>
    <title>Upload file to AWS-S3</title>
    <style>
      .container {
        font-family: system-ui, "Open Sans", "Helvetica Neue", "sans-serif";
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
      }
      h2 {
        padding-right: 120px;
      }

      .container input[type="file"] {
        box-shadow: 2px 2px #818a84;
        border: 2px solid #818a84;
        padding: 20px;
        margin: 5px;
      }

      .container button[type="submit"] {
        border-radius: 5px;
        border: none;
        padding: 22px;
        margin: 10px;
        background-color: #36794b;
        color: white;
        font-weight: bold;
        cursor: pointer;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h2>Upload file</h2>
      <form method="post" enctype="multipart/form-data" action="../index.php">
        <input type="file" name="file" required />
        <button type="submit" name="submit">Upload file</button>
      </form>
    </div>
  </body>
</html>
