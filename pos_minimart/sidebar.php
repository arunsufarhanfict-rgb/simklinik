<?php
// Deteksi halaman saat ini
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="sidebar">
    <div class="sidebar-header">
        <h2><?php echo APP_NAME; ?></h2>
    </div>

    <ul class="sidebar-nav">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php echo ($current_page === 'dashboard.php') ? 'active' : ''; ?>">
                <i>📊</i> Dashboard
            </a>
        </li>

        <?php if ($role === 'admin' || $role === 'kasir'): ?>
            <li class="nav-item">
                <a href="penjualan.php" class="nav-link <?php echo ($current_page === 'penjualan.php') ? 'active' : ''; ?>">
                    <i>🛒</i> Penjualan
                </a>
            </li>
            <li class="nav-item">
                <a href="laporan_penjualan.php"
                    class="nav-link <?php echo ($current_page === 'laporan_penjualan.php') ? 'active' : ''; ?>">
                    <i>📈</i> Laporan Penjualan
                </a>
            </li>
        <?php endif; ?>

        <?php if ($role === 'admin' || $role === 'gudang'): ?>
            <li class="nav-item">
                <a href="barang.php" class="nav-link <?php echo ($current_page === 'barang.php') ? 'active' : ''; ?>">
                    <i>💊</i> Data barang
                </a>
            </li>
            <li class="nav-item">
                <a href="pembelian.php" class="nav-link <?php echo ($current_page === 'pembelian.php') ? 'active' : ''; ?>">
                    <i>📦</i> Pembelian
                </a>
            </li>
            <li class="nav-item">
                <a href="laporan_pembelian.php"
                    class="nav-link <?php echo ($current_page === 'laporan_pembelian.php') ? 'active' : ''; ?>">
                    <i>📉</i> Laporan Pembelian
                </a>
            </li>
            <li class="nav-item">
                <a href="stok.php" class="nav-link <?php echo ($current_page === 'stok.php') ? 'active' : ''; ?>">
                    <i>📋</i> Manajemen Stok
                </a>
            </li>
        <?php endif; ?>

        <?php if ($role === 'admin'): ?>
            <li class="nav-item">
                <a href="kategori.php" class="nav-link <?php echo ($current_page === 'kategori.php') ? 'active' : ''; ?>">
                    <i>🏷️</i> Kategori barang
                </a>
            </li>
            <li class="nav-item">
                <a href="vendor.php" class="nav-link <?php echo ($current_page === 'vendor.php') ? 'active' : ''; ?>">
                    <i>🏢</i> Vendor
                </a>
            </li>
            <li class="nav-item">
                <a href="customer.php" class="nav-link <?php echo ($current_page === 'customer.php') ? 'active' : ''; ?>">
                    <i>🏢</i> Customer
                </a>
            </li>
            <li class="nav-item">
                <a href="payment" class="nav-link <?php echo ($current_page === 'payment.php') ? 'active' : ''; ?>">
                    <i>🏢</i> payment
                </a>
            </li>
            <li class="nav-item">
                <a href="users.php" class="nav-link <?php echo ($current_page === 'users.php') ? 'active' : ''; ?>">
                    <i>👥</i> Manajemen User
                </a>
            </li>
            <li class="nav-item">
                <a href="pengaturan.php"
                    class="nav-link <?php echo ($current_page === 'pengaturan.php') ? 'active' : ''; ?>">
                    <i>⚙️</i> Pengaturan
                </a>
            </li>
        <?php endif; ?>

        <li class="nav-item">
            <a href="logout.php" class="nav-link <?php echo ($current_page === 'logout.php') ? 'active' : ''; ?>">
                <i>🚪</i> Logout
            </a>
        </li>
    </ul>
</nav>