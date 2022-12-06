<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../cssanim/style.css">
    <style>
        .container{
            width:92%; 
            height: 450px; 
            margin: auto; 
            display:flex; 
            margin-left:50px; 
            margin-top:50px;
            font-size: 24px;
        }
        img{
            margin-left:20px;
            width: 320px;
        }
        .sinopsis{
            margin : 50px;
            margin-left: 50px;
            height: 300px;
            width : 92%;
            background-color:#141829;
            border-radius: 5px;
            color: #f5f5f5;
            font-size:24px
        }
        a{
            text-decoration:none;
        }
        .komentar{
            width : 92%;
            height : 500px;
            margin-left:50px;
            margin-top: 50px ;
        }

        .komentar .beri-komen{
            color:#f5f5f5;
            font-size:36px;
        }

        .komentar .beri-komen input{
            width : 94%;
            height : 30px;
            background-color: #141829;
        }

        .komentar .komentar-orang{
            width : 95%;
            height: 300px;
            background-color: #141829;
            margin-top: 10px;
        }
        a{
            color: purple;
        }
        .container tr td{
            padding-bottom: 8px;
        }

fieldset, label { margin: 0; padding: 0; }
/** Style untuk rating star ***/

.rating { 
  border: none;
  float: left;
  margin-right: 25px;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/** CSS untuk hover nya **/

.rating > input:checked ~ label, /* memperlihatkan warna emas pada saat di klik */
.rating:not(:checked) > label:hover, /* hover untuk star berikutnya */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover untuk star sebelumnya  */

.rating > input:checked + label:hover, /* hover ketika mengganti rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* seleksi hover */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }


.alert {
    width : 400px;
    heigh : 100px;
    background-color :  #141829;
    position : absolute;
    text-align : center;
    margin-top : 190px;
    margin-left : 450px
    
}
    </style>
    <title>Profile anim</title>
</head>
<body>
    <nav>
        <a href="index.php">
        <div class=logo>
            <img src="../image/logo.png" style="width:175px; height:auto">
        </div>
        </a>
        <a href="profile.php">
            <div class="profile">
                    <img src="../image/profile.jpg" alt="">
            </div>
        </a>
        <ul>
            <div class="item">
                <li ><a href="index.php">Home</a></li>
                <li ><a href="genre.php">Genre</a></li>
                <li ><a href="profile.php">Profile</a></li>
            </div>
        </ul>
        <div class="search">
            <form action="">
                <input type="text" placeholder="Cari Anime">
            </form>
        </div>
    </nav>
    <nav class="title">
        <div>
            Jujutsu Kaisen
        </div>
    </nav>
    <!-- ===========================================================-->
    <div class="alert">
        <p>login untuk melakukan tindakan</p>
        <p><a href="login.php">Login</a> disini</p>
    </div>
    <div class="container">
        <img src="../image/jjk.jpg">
        <div class="info" style="margin-left:20px;width:70%">
        <table style="color:#f5f5f5; padding-bottom:20px; margin:20px" >
                <tr >
                    <td>Judul</td>
                    <td> : </td>
                    <td
                    > Jujutsu Kaisen</td>
                </tr>
                <tr>
                    <td>    </td>
                    <td>:</td>
                    <td 
                    > 呪術廻戦</td>
                </tr>
                <tr >
                    <td>Peringkat</td>
                    <td>:</td>
                    <td 
                    > 50 </td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>:</td>
                    <td 
                    >8.54</td>
                </tr>
                <tr>
                    <td>Episode</td>
                    <td>:</td>
                    <td 
                    >24 Episode</td>
                </tr>
                <tr>
                    <td>Studio</td>
                    <td>:</td>
                    <td 
                    ><a href="">Mappa</a></td>
                </tr>
                <tr>
                    <td>Rilis</td>
                    <td>:</td>
                    <td 
                    >2020</td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>:</td>
                    <td 
                    ><a href="action.php">Action, <a href="adventure.php">Adventure,</a></a></td>
                </tr>
                <tr>
                    <td>Penilaian kamu</td>
                    <td>:</td>
                    <td>
                    <div class="card mb-4">
                            <div class="card-body">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                       
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>Link menonton</td>
                    <td>:</td>
                    <td><a href="infoanimalert.php">Klik disini</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="sinopsis">
    <p>    Iseng-iseng terlibat dalam kegiatan paranormal tak berdasar dengan Klub Ilmu Gaib, 
    siswa sekolah menengah Yuuji Itadori menghabiskan hari-harinya di ruang klub atau rumah sakit, 
    di mana ia mengunjungi kakeknya yang terbaring di tempat tidur. Namun, gaya hidup santai ini 
    segera berubah menjadi aneh ketika dia tanpa sadar menemukan benda terkutuk. Memicu rantai kejadian supernatural, 
    Yuuji mendapati dirinya tiba-tiba didorong ke dunia Kutukan—makhluk mengerikan yang terbentuk dari kedengkian 
    dan kenegatifan manusia—setelah menelan benda tersebut, terungkap sebagai jari milik iblis Sukuna Ryoumen,"Raja Kutukan"</p>
    <p>Yuuji mengalami secara langsung ancaman Kutukan ini terhadap masyarakat saat ia menemukan kekuatan barunya sendiri. 
    Diperkenalkan ke Sekolah Tinggi Teknik Jujutsu Metropolitan Tokyo, 
    ia mulai berjalan di jalan yang tidak dapat ia kembalikan—jalan seorang penyihir Jujutsu.</p>
    </div>

    <div class="komentar">
        
        <div class="komentar-orang">

        </div>
    </div>
</body>
</html>