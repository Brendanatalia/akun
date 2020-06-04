<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Akuntansi</title>

    <!-- Favicons -->
    <link href="img/login.png" rel="icon">
    <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="chart-master/Chart.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header blue-bg">
            <!--logo start-->
            <a href="index.html" class="logo">Akun</a>
            <!--logo end-->
            </li>
            <div class="top-menu">
                <div class="dropdown">
                    <button class="dropbtn">Jaya123
                        <i class="fa fas fa-caret-down"></i></i>
                    </button>
                    <div class="dropdown-content">
                        <a href='/login'>Keluar</a>
                    </div>
                </div>
            </div>
        </header>
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li class="mt">
                        <a class="active" id="box" href="/transaksi">
                            <i class="fa fas fa-money-check"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/jurnal'>
                            <i class='fa fas fa-book-open'></i>
                            <span>Jurnal</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/bukubesar'>
                            <i class='fa fas fa-book'></i>
                            <span>Buku Besar</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/neracasaldo'>
                            <i class='fa fas fa-chart-bar'></i>
                            <span>Neraca Saldo</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/labarugi'>
                            <i class="fa fas fa-chart-line"></i>
                            <span>Laba Rugi</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/neraca'>
                            <i class="fa fas fa-balance-scale"></i>
                            <span>Neraca</span>
                        </a>
                    </li>
                    <li>
                        <a href='/periode'>
                            <i class="fa fas fa-donate"></i>
                            <span>Periode</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/utang'>
                            <i class=" fa fas fa-receipt"></i>
                            <span>Utang</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href='/piutang'>
                            <i class="fa fas fa-donate"></i>
                            <span>Piutang</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <section id="main-content">
            <div class="wrapper">
                <h3>Transaksi</h3>
                <div id="wrapper-select">
                    <div id="wrapper-item" class="custom-select" style="width:200px">
                        <select>
                    <option value="0">Pilih Bulan:</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                    </div>
                    <div id="wrapper-item" class="custom-select" style="width:200px">
                        <select>
                    <option value="0">Pilih Tahun:</option>
                    <option value="1">2010</option>
                    <option value="2">2011</option>
                    <option value="3">2012</option>
                    <option value="4">2013</option>
                    <option value="5">2014</option>
                    <option value="6">2015</option>
                    <option value="7">2016</option>
                    <option value="8">2017</option>
                    <option value="9">2018</option>
                    <option value="10">2019</option>
                    <option value="11">2020</option>
                </select>
                    </div>

                    <div id="wrapper-item" class="button1">
                        <a href="#popup"><i class="fa fas fa-plus"></i> Tambah Transaksi</a></div>
                        <div id="popup">
                            <div class="window">
                                <a href='#' class="close-button" title="Close">X</a>
                                <h2>Transaksi Baru</h2>
                                <form>
                                    <div id="wrapper-select">
                                        <div id="wrapper-item">
                                    <input type="text" id="date" style="height:36px">
                                    <i class="fa fas fa-calendar-alt"></i>
                                    <script>
                                        $( function() {
                                          $( "#date" ).datepicker({
                                            dateFormat: "yy-mm-dd"
                                          });
                                        } );
                                        </script>
                                    </div>
                                    <div id="wrapper-item">
                                    <div id="select-window" class="custom-select" style="width:283px">
                                        <select>
                                            <option value="0">Pilih Jenis Transaksi:</option>
                                            <option value="1">Pemasukan</option>
                                            <option value="2">Transaksi</option>
                                            <option value="3">Pengeluaran</option>
                                            <option value="4">Utang</option>
                                            <option value="5">Piutang</option>
                                            <option value="6">Tambah Modal</option>
                                            <option value="7">Tarik Modal</option>
                                        </select>
                                    </div>
                                    </div>
                                    </div><br><br>
                                        <label for="diterima">
                                            Diterima dari
                                        </label><br>
                                        <div id="select-window" class="custom-select" style="width:500px">
                                            <select>
                                                <option value="0">Pilih Jenis Transaksi:</option>
                                                <option value="1">Pemasukan</option>
                                                <option value="2">Transaksi</option>
                                                <option value="3">Pengeluaran</option>
                                                <option value="4">Utang</option>
                                                <option value="5">Piutang</option>
                                                <option value="6">Tambah Modal</option>
                                                <option value="7">Tarik Modal</option>
                                            </select>
                                        </div><br>
                                        <label>
                                            Simpan ke</label>
                                            <div id="select-window" class="custom-select" style="width:500px">
                                                <select>
                                                    <option value="0">Pilih Jenis Transaksi:</option>
                                                    <option value="1">Pemasukan</option>
                                                    <option value="2">Transaksi</option>
                                                    <option value="3">Pengeluaran</option>
                                                    <option value="4">Utang</option>
                                                    <option value="5">Piutang</option>
                                                    <option value="6">Tambah Modal</option>
                                                    <option value="7">Tarik Modal</option>
                                                </select>
                                            </div><br>
                                            <label>Keterangan</label>
                                            <input type="text" id="date" style="width:500px"><br>
                                            <label>Nominal</label>
                                            <input type="number" id="date" style="width:500px"><br><br>
                                            <input type="submit" class="button2" value="Simpan">
                                </form>
                            </div>
                            </div>
                    </button>
                    <script>
                        var x, i, j, selElmnt, a, b, c;
                        /*look for any elements with the class "custom-select":*/
                        x = document.getElementsByClassName("custom-select");
                        for (i = 0; i < x.length; i++) {
                            selElmnt = x[i].getElementsByTagName("select")[0];
                            /*for each element, create a new DIV that will act as the selected item:*/
                            a = document.createElement("DIV");
                            a.setAttribute("class", "select-selected");
                            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                            x[i].appendChild(a);
                            /*for each element, create a new DIV that will contain the option list:*/
                            b = document.createElement("DIV");
                            b.setAttribute("class", "select-items select-hide");
                            for (j = 1; j < selElmnt.length; j++) {
                                /*for each option in the original select element,
                                create a new DIV that will act as an option item:*/
                                c = document.createElement("DIV");
                                c.innerHTML = selElmnt.options[j].innerHTML;
                                c.addEventListener("click", function(e) {
                                    /*when an item is clicked, update the original select box,
                                    and the selected item:*/
                                    var y, i, k, s, h;
                                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                                    h = this.parentNode.previousSibling;
                                    for (i = 0; i < s.length; i++) {
                                        if (s.options[i].innerHTML == this.innerHTML) {
                                            s.selectedIndex = i;
                                            h.innerHTML = this.innerHTML;
                                            y = this.parentNode.getElementsByClassName("same-as-selected");
                                            for (k = 0; k < y.length; k++) {
                                                y[k].removeAttribute("class");
                                            }
                                            this.setAttribute("class", "same-as-selected");
                                            break;
                                        }
                                    }
                                    h.click();
                                });
                                b.appendChild(c);
                            }
                            x[i].appendChild(b);
                            a.addEventListener("click", function(e) {
                                /*when the select box is clicked, close any other select boxes,
                                and open/close the current select box:*/
                                e.stopPropagation();
                                closeAllSelect(this);
                                this.nextSibling.classList.toggle("select-hide");
                                this.classList.toggle("select-arrow-active");
                            });
                        }

                        function closeAllSelect(elmnt) {
                            /*a function that will close all select boxes in the document,
                            except the current select box:*/
                            var x, y, i, arrNo = [];
                            x = document.getElementsByClassName("select-items");
                            y = document.getElementsByClassName("select-selected");
                            for (i = 0; i < y.length; i++) {
                                if (elmnt == y[i]) {
                                    arrNo.push(i)
                                } else {
                                    y[i].classList.remove("select-arrow-active");
                                }
                            }
                            for (i = 0; i < x.length; i++) {
                                if (arrNo.indexOf(i)) {
                                    x[i].classList.add("select-hide");
                                }
                            }
                        }
                        /*if the user clicks anywhere outside the select box,
                        then close all select boxes:*/
                        document.addEventListener("click", closeAllSelect);
                    </script>
                </div>
                <div class="table11">
                    <table>
                        <tr>
                            <td rowspan="2">
                                <div class="box-table"></div>
                            </td>
                            <td>
                                <div id="tanggal11" class="tanggal">7</div>
                            </td>
                            <td rowspan="2">
                                <div class="keterangan">Dibayar Piutang Andi</div>
                            </td>
                            <td rowspan="2">
                                <div class="jumlah-uang">500.000</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="tanggal11">Mei</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </section>
</body>

</html>
