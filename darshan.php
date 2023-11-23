<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
       
    header .song_side::before{
   
    background: url('darshan1.jpeg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
       
   
}
    </style>
</head>
<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
              <h4 class="active"><span></span><a href="welcome.php"><i class="bi bi-music-note-beamed">Playlist</i></a></h4> 
              <h4><span></span><i class="bi bi-music-note-beamed">Last Listening</i></h4> 
              <h4><span></span><i class="bi bi-music-note-beamed">Recommended</i></h4>  
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/img01.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="img/img02.jpg" alt="">
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                </li>
            </div>
        </div>
        <div class="song_side">
          <nav>
            <ul>
                <a href="index.html"><li>Discover <span></span></li></a>
                <li>MY LIBRARY</li>
                <li>RADIO</li>
            </ul>
            <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" name="" id="" placeholder="Search Music....">
            </div>
            <div class="user">
                <img src="profile.jpeg" alt="">
            </div>
          </nav>  
          <div class="content">
            <h1>Darshan Raval</h1>
            <p>Mainu rabb mileya

sab mileya

Jab tu mileya mainu


Mainu hajj mileya
<br>
Rajj rajj mileya

mainu jab mileya hai tu


Mainu rabb mileya

Mainu sab<br> mileya

Mainu jab mileya hai tu


Mainu haq mileya

Rooh tak miileya<br>

Mainu jab mileya hai tu


Tera hona ik sapna laggda

Bas ik tu hi apna laggda...




</p>
            <div class="buttons">
                <button>PLAY</button>
                <button>FOLLOW</button>
            </div>
          </div> 
          <div class="popular_song">
            <div class="h4">
                <h4>Popular Song</h4>
                <div class="btn_s">
                    <i class="bi bi-arrow-left" id="pop_song_left"></i>
                    <i class="bi bi-arrow-right" id="pop_song_right"></i>
                </div>   
            </div>
            <div class="pop_song">
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img01.jpg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>Copines<br>
                    <div class="subtitle">Aya Nakamura </div></h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img02.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>Cheap Thrills<br>
                    <div class="subtitle">Sia</div></h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img03.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>Perfect<br>
                    <div class="subtitle">Ed_Sheeran</div></h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img04.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>Baby<br>
                    <div class="subtitle">Justin Bieber</div></h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img05.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>Memories<br>
                    <div class="subtitle">Maroon_5</div></h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img06.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>Girls_like_you<br>
                    <div class="subtitle">Maroon_5</div></h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img/img07.jpg" alt="">
                    <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                    </div>
                    <h5>Shape-of-you<br>
                    <div class="subtitle">Ed_Sheeran</div></h5>
                </li>
        
                
            </div>
        
        </div> 

        <div class="popular_artists">
            <div class="h4">
                <h4>Popular Artists</h4>
                <div class="btn_s">
                    <i class="bi bi-arrow-left" id="pop_art_left"></i>
                    <i class="bi bi-arrow-right" id="pop_art_right"></i>
                </div>
                
            </div>
            <div class="item">
                <li>
                   <a href="arjit.php"> <img src="img/arjitsingh3.jpeg" alt=""></a>
                </li>
                <li>
                    <a href="darshan.php"><img src="img/darshan_raval.jpeg" alt=""></a>
                </li>
                <li>
                    <img src="img/amaal_malik.jpeg" alt="">
                </li>
                <li>
                    <img src="img/Aya_nakamura.jpeg" alt="">
                </li>
                <li>
                    <img src="img/EdSheeren.jpeg" alt="">
                </li>
                <li>
                    <img src="img/eleGoudling.jpeg" alt="">
                </li>
                <li>
                    <img src="img/harshvardhan.jpeg" alt="">
                </li>
                <li>
                    <img src="img/justin.jpeg" alt="">
                </li>
                <li>
                    <img src="img/swae_lee.jpeg" alt="">
                </li>
                <li>
                    <img src="img/sugar_artist.jpeg" alt="">
                </li>
                <li>
                    <img src="img/sia.jpeg" alt="">
                </li>
                <li>
                    <img src="img/dance_monkey.jpeg" alt="">
                </li>
                <li>
                    <img src="img/maroon5_1.jpeg" alt="">
                </li>
                <li>
                    <img src="img/cupid.jpeg" alt="">
                </li>
                
                
            </div>
         </div>
        </div>
        <div class="master_play">
            <div class="wave" id= 'wave'>
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/1.jpeg" alt="" id="poster_master_play">
            <h5 id="title">
                Copines
                <div class="subtitle">Aya Nakamura</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill" ></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" name="" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>

    </header>
    <script src="darshan.js"></script>
</body>
</html>