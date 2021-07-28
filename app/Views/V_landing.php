<head>
<style>
    h1 {
        font-family: Gordita;
        font-weight: medium;
        font-size: 64px;
        text-align: center;
        padding-top: 200px;
    }
    .subheading{
        font-family: Gordita;
        color: #616161;
        text-align: center;
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
        margin: 4px 2px;
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

</style>
</head>

    <div style="margin: auto; width: 90%; height: 700px; background: #FFFFFF; border-radius: 10px; position:relative;">
        <h1>DAHAJI</h1>
        <p class="subheading">Website untuk membuat Data Hasil Uji</p>
        <div style="display: flex; justify-content: center; align-items: center;">
            <a class="button button1" href="<?php echo base_url('signup')?>")>Sign Up</a>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <a class="button button1" href="<?php echo base_url('login')?>")>Log In</a>
        </div>
    </div>
    
</body>
</html>