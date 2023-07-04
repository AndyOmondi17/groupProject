<?php
    include "../Handlers/db_connect.php";

    if(isset($_POST["viewblog"])){ 

        $authorFullName = $_POST["authorFullName"];
        $title = $_POST["title"];
        $fullText = $_POST["fullText"];
        $publicationDate = $_POST["publicationDate"];

        // Check if any field is empty
        if(empty($authorFullName) || empty($title) || empty($fullText) || empty($publicationDate)){
            header("Location: ../viewBlog.php?error=allfieldsrequired");
            exit();
        } 

        // Sanitize the form data
        $authorFullName = $conn->real_escape_string($authorFullName);
        $title = $conn->real_escape_string($title);
        $fullText = $conn->real_escape_string($fullText);
        $publicationDate = $conn->real_escape_string($publicationDate);

        $insert_article = "INSERT INTO articles (authorFullName, title, `fullText`, publicationDate) VALUES ('$authorFullName', '$title', '$fullText', '$publicationDate')";

        try {
            if ($conn->query($insert_article) === TRUE) {
            
                // You may want to redirect to another page, e.g., the list of all articles
                header("Location: ../viewBlog.php?success=true");
                exit();
            } else {
                header("Location: ../viewBlog.php?error=errorocurred");
                exit();
            }
        } catch (Exception $e) {
            header("Location: ../viewBlog.php?error=".$e->getMessage());
            exit();
        }
         
    }
?>
