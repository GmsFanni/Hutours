<script>
    logoutUser('../server/logout.php',render)

    function render(data){
        console.log('sikeres kijelentkezés!')
        location.href='./index.php'
    }
</script>