<head>
<style>
    h1 {
        font-family: Gordita;
        font-weight: medium;
        font-size: 3rem;
        /* text-align: center; */
        padding-top: 50px;
        
    }

    .Container{
        padding-left: 100px

    }
    
    .button {
        background-color: #6935FD;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        /* margin: 4px 2px; */
        margin-left: auto;
        display: block;
        margin-top: 4px;
        margin-right: 5rem;
        transition-duration: 0.4s;
        cursor: pointer;
        font-family: Gordita;
        }

    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #6935FD;
    }

    .button1:hover {
        background-color: #6935FD;
        color: white;
        font-family: Gordita;
    }
    .inputBox {
        border: none;
        background-color: white;
        padding: 0.75rem;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.05), 0 6px 20px 0 rgba(0, 0, 0, 0.01);
        width: 50%;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .inputBox:focus{
        outline: none;
    }

    .inputLabel{
        font-family: Gordita;
        color: gray;
    }

</style>
</head>
    <div style="margin: auto; width: 90%; height: 700px; background: #FFFFFF; border-radius: 10px; position:relative;">
        <div class="Container">
        <h1>Sign Up</h1>
        <!-- <p class="subheading">Sign Up</p> -->
        <!-- <div style="display: flex; justify-content: center; align-items: center;">
            <a class="button button1" href="<?php echo base_url('C_signup')?>")>Sign Up</a>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a class="button button1">Log In</a>
        </div> -->
        <form method="POST" action="<?php echo base_url('signup/register')?>" enctype="multipart/form-data">
            <label class="inputLabel">Nama Lengkap</label><br>
            <input class="inputBox" placeholder="..." type="text" name="nama"><br>
            <label class="inputLabel">Email:</label><br>
            <input class="inputBox" placeholder="..."type="text" name="email"><br>
            <label class="inputLabel">Password</label><br>
            <input class="inputBox" placeholder="..."type="password" name="password"><br>
            <label class="inputLabel">Confirm Password</label><br>
            <input class="inputBox" placeholder="..."type="password" name="cpassword"><br>
            <label class="inputLabel">Upload Paraf</label><br>
            <input class="inputBox" type="file" name="paraf"><br>
            <button type="submit" class="button button1">Submit</button>
        </form>
        </div>   
    </div>
</body>
</html>