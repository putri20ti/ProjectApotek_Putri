<!-- End of Footer -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="<?=base_url('assets/')?>https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?=base_url('assets/')?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>
<script src="<?=base_url('assets/')?>lib/chart/chart.min.js"></script>
<script src="<?=base_url('assets/')?>lib/easing/easing.min.js"></script>
<script src="<?=base_url('assets/')?>lib/waypoints/waypoints.min.js"></script>
<script src="<?=base_url('assets/')?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?=base_url('assets/')?>lib/tempusdominus/js/moment.min.js"></script>
<script src="<?=base_url('assets/')?>lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?=base_url('assets/')?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="<?=base_url('assets/')?>js/main.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
<!-- Page level plugins -->
<script src="<?=base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?=base_url('assets/')?>js/demo/datatables-demo.js"></script>
<!-- <script>
$(document).ready(function() {
    $("#jumlah").on('keydown keyup change blur', function() {
        var harga_jual = $("#harga").val();
        var jumlah_obat = $("#jumlah").val();
        var total = parseInt(harga_jual) * parseInt(jumlah_obat);
        $("#total").val(total);
        if (parseInt($('input[name="stok"]').val()) <=

            parseInt(jumlah_obat)) {

            alert('stok tidak tersedia! stok tersedia : ' +

                parseInt($('input[name="stok"]').val()))

            reset()
        }
    });

    function reset() {
        $('input[name="jumlah_obat"]').val('' / )
        $('input[name="total"]').val('')
    }
})
</script> -->
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
})
$(document).ready(function() {
    $("#jumlah").on('keydown keyup change blur', function() {
        var harga_jual = $("#harga_jual").val();
        var jumlah = $("#jumlah").val();

        var total = parseInt(harga_jual) * parseInt(jumlah);
        $("#total").val(total);
        if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
            alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
            reset()
        }
    });

    function reset() {
        $('input[name="jumlah"]').val('')
        $('input[name="total"]').val('')
    }
})
</script>
<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php
                foreach ($totalb as $data) {
                    echo "'" . $data['obat'] . "',";
                }
                ?>
        ],
        datasets: [{
            label: 'Jumlah Obat Terjual',
            backgroundColor: "#4e73df",
            hoverBackgroundColor: "#2e59d9",
            borderColor: "#4e73df",
            data: [
                <?php
                    foreach ($total as $data) {
                        echo $data['jumlah'] . ", ";
                    }
                    ?>
            ]
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: 'obat'
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 20
                },
                maxBarThickness: 50,
            }],
            yAxes: [{
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }],
        },
        tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
    }
});
</script>

</body>

</html>