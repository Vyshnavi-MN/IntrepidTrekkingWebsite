<?php include('processProfile.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="profileStyle.css">
    <title>User Profile and update</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <form action="processProfile.php" method="post" enctype="multipart/form-data">
                    <h3 class="text-center">User Profile</h3>

                    <?php if(!empty($msg)):?>
                        <div class="alert <?php echo $css_class;?>">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <img src="images/<?php echo $profileImageName?>" onclick="triggerClick()" id="profileDisplay" style="width:5cm;height:5cm;margin-left:23%;">
                        <label for="profileImage" style="margin-left:35%;">Profile Image</label>
                        <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display:none">
                    </div>
                    <div class="form-group">
                        <label for="bio" >Bio</label>
                        <textarea name="bio" id="bio" class="form-control"><?php echo $bio;?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
                    </div>    
                </form>
            </div>
        </div>
    </div>

    <script>
        function triggerClick(){
            document.querySelector('#profileImage').click();
        }
        function displayImage(e){
            if(e.files[0]){
                var reader = new FileReader();

                reader.onload = function(e){
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataUrl(e.files[0]);
            }
        }
        
    </script>


</body>
</html>