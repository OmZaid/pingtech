<style>
    /* Reset */
    *{
        margin: 0;
        paddding: 0;
    }

    .wrapper{
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .wrapper .wrapper__video{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

</style>
<a href="index.php">
<div class="wrapper">

    <video autoplay loop muted class="wrapper__video">
        <source src="video.mp4">
    </video>

</div>
</a>