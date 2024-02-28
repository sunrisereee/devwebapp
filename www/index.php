<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'files/head.php'; ?>
</head>
<body>
    <?php include 'files/header.php'; ?>

    <main>
        <?php include 'login-sign-in.php'; ?>
    </main>

    <?php include 'files/footer.php'; ?>

    <script>
        function AddString(){
            var table = document.getElementById("myTable");
            var newRow = table.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);

            var text = document.getElementById("textarea_main").value;
            
            cell1.innerHTML ='<img src="https://sun9-47.userapi.com/s/v1/if1/kjsfC50PcekzVVE-W7dTV0GPkB2x4sxUPh_UvxWUeDePRtwsiJveMR2vfm_F6bTNROvZMNtA.jpg?size=200x200&quality=96&crop=82,0,771,771&ava=1" class="width-img">';
            cell2.innerHTML = '<h3>' + text + '</h3>';
        }

        var button_addtext = document.getElementById("button_addtext");
        button_addtext.addEventListener("click", AddString);
    </script>
</body>
</html>