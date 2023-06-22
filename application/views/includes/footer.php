<input type="hidden" value="<?php echo base_url(); ?>" name="base_url" />
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/dist/products.js'); ?>"></script>
<style>
    aside.main-sidebar.sidebar-dark-primary.elevation-4 {
        background: #eee !important;
    }

    .p1 {
        padding: 1em;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #ff9900 !important;
    }

    [class*=sidebar-dark] .brand-link {
        border-bottom: 0px solid #ff9900 !important;
    }

    [class*=sidebar-dark-] .sidebar a {
        color: #ff9900;
        font-weight: 500;
    }

    a.nav-link:hover {
        background: #ff9900 !important;
    }

    a.brand-link {
        margin-bottom: 2em !important;
    }

    img.logo {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 75%;
    }

    .active-label,
    .inactive-label {
        font-size: 12px;
        border-radius: 12px;
        color: #fff;
        padding: 4px;
    }

    .active-label {
        background: #ff9900;
    }

    .inactive-label {
        background: #222;
    }
</style>

</html>