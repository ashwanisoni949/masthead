<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form id="form_submit">

        Name: <br>
        <input type="text" name="name" id="name">
        <br>
        Email: <br>
        <input type="text" name="email" id="email">
        <br>
        mobile: <br>
       
        
        <br>
        <input type="text" name="mobile" id="email"> <br>
        Password : <br> 
        <input type="password" name="password" id="pass"><button type="button" onclick="hidePass()" id="hide_pass" value="show">show</button> <br>
    <input type="hidden" name="id" id="hide">
        <br> 
        
        <input type="submit" value="Submit" id="btn_submit">
    </form>

    <br>

    <div id="records">


    </div>



    <script src="js/jquery.js"></script>

    <script>
        $(document).ready(() => {
            //alert("jq is running");
            show();
            $("#form_submit").on("submit", function(e) {
                e.preventDefault();
                // var name = $("#name").val();
                // var email = $("#email").val();
                // if(name!="" && email != ""){
                $.ajax({
                    url: "create.php",
                    type: "POST",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,

                    success: function(resp) {
                        console.log(resp);
                        var rep = JSON.parse(resp);
                        console.log(rep);
                        if (rep.status == true) {
                            $("#hide").val("");
                            $("#btn_submit").val("submit");
                            $("#form_submit").trigger("reset");
                            alert(rep.message);
                        } else if (rep.status == false) {
                            alert(rep.message);
                        }
                        show();
                    }
                })
                // }
                // else{
                //     console.log("error");
                // }
                
                // alert("form submit");
            })





        })

        function delete_data(id) {
            alert(id);
            var conf = confirm("Are you sure to delete")

            if (conf == true) {
                $.ajax({
                    url: "delete.php",
                    data: {
                        id: id
                    },
                    type: "POST",
                    success: function(resp) {
                        var message = JSON.parse(resp)
                        if (message.status == true) {
                            alert(message.message);
                        } else {
                            alert(message.message);
                        }
                    }
                })
                show();
            }


        }

        function show() {
            $.ajax({
                url: "show.php",
                type: "get",
                success: function(data, status) {
                    $("#records").html(data);
                }

            })
        }

        function edit_data(id) {
            $.ajax({
                url: "edit.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(resp) {
                    var resp = JSON.parse(resp);
                    // console.log(resp.data.name);
                    if (resp.status) {
                        $("#name").val(resp.data.name);
                        $("#email").val(resp.data.email);
                        $("#hide").val(resp.data.id);
                        $("#btn_submit").val("update");
                        
                        
                    }
                    else{
                        alert(resp.message);
                    }
                }
                
            })
        }
        function hidePass(){
            var type = $("#pass").attr("type");
            if(type=="text"){
                $("#pass").attr("type","password");
                $("#hide_pass").text("show");
            }
            else{
                $("#pass").attr("type","text");
                $("#hide_pass").text("hide");
            }
        }
        
    </script>
</body>

</html>