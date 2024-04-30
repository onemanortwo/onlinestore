<footer>
    <p>&copy; Online Boating Store</p>
    <?php if(isset($_SESSION['user_id'])): ?>
        <form action="logout.php" method="post">
            <button type="submit">Logout</button>
        </form>
        
    <?php endif; ?>
</footer>


</div>

</body>
</html>
