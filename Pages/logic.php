<?php

    // Don't display server errors 
    ini_set("display_errors", "off");
	
 

    // Initialize a database connection
    $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com", "b8f74754068922", "81e51a35", "heroku_a280f85f3fd531e");

 
    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on writing page
    $sql = "SELECT * FROM `post`";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO post(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: writing.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['title'])){
        $title = $_REQUEST['title'];
        $sql = "SELECT * FROM post WHERE title = $title";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM blog.post WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: writing.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE blog.post SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: writing.php");
        exit();
    }

?>