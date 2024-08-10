<div class="container-fluid">
    <h5>
        <table class="table table-bordered table-striped table-hover" >
            <tr class="text-center">
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-Total</th>
            </tr>
            <?php $no=1; 
            foreach( $this->cart->contents() as $items  ) : ?>
                <tr>
                    <td class="text-center"> <?php echo $no++ ?> </td>
                    <td> <?php echo $items['name'] ?> </td>
                    <td class="text-center" > <?php echo $items['qty'] ?> </td>
                    <td align="right"> Rp.<?php echo number_format($items['price'],0,',','.')  ?> </td>
                    <td align="right" > Rp.<?php echo number_format($items['subtotal'],0,',','.') ?> </td>
                </tr>

            <?php endforeach; ?>
            <tr>
                <td align="right" colspan="4" > Total </td>
                <td align="right" > Rp.<?php echo number_format($this->cart->total(),0,',','.') ?> </td>
            </tr>
        </table>
        <div align="right">
                <a href=" <?php echo base_url('dashboard/hapus_keranjang') ?> "><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
                <a href=" <?php echo base_url('welcome') ?> "><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
                <a href=" <?php echo base_url('dashboard/pembayaran') ?> "><div class="btn btn-sm btn-success">Pembayaran</div></a>
        </div>
</div>