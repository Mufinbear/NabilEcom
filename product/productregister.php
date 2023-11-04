<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <title>User Register</title>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center h-100">

        <form method="post" action="preg.php">
            <table cellspacing="8" cellpadding="8" align="center">
                <tr>
                    <td colspan="2">
                        <h2>
                            <center>Register Product</center>
                        </h2>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="pname"></td>
                </tr>
                <tr>
                    <th>Type</thh>
                    <td><input type="text" name="ptype"></td>
                </tr>
                <tr>
                    <th>Price</thh>
                    <td><input type="number" name="pprice"></td>

                </tr>
                <tr>
                    <th>Quantity</th>
                    <td><input type="number" name="pqty"></td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td><textarea cols='30' rows='10' name='pdetails'></textarea></td>
                </tr>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <tr>
                        <th>Upload Image</th>
                        <td>
                            <input type="file" name="pimg" id="pimg">
                        </td>
                    </tr>
                </form>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="btnsubmit" value="Register">
                            <input type="reset" name="btnreset" value="Reset">
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="productdetails.php">
                            <center>Back</center>
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>