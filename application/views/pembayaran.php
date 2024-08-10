<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-warning">
               <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents() )
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                        echo  "<h5>Total Belanja Anda : Rp." .number_format($grand_total,0,',','.');
                ?>
            </div><br><br>
            <h3>Input Alamat Pembayaran dan Pengiriman</h3> 
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan')?>">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_hp" placeholder="Nomor Telepon Anda" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control">
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>JNT</option>
                            <option>POS Indonesia</option>
                            <option>Gojek</option>
                            <option>Grab</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select class="form-control">
                            <option>BCA</option>
                            <option>BNI</option>
                            <option>BRI</option>
                            <option>Mandiri</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mt-3" >Pesan</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>