<script>
    logoutUser('../server/logout.php',render)

    function render(data){
        console.log('Sikeres kijelentkezés!')
        location.href='./index.php'
    }
</script>