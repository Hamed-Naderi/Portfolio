<?php
get_header();
?>

<body>
    <div class="wrapper">
        <div class="theSidebar">
          <div class="profile">
            <div class="photo">
              <img src= <?php echo get_theme_file_uri('images/myPic.png'); ?>>
            </div>
            <div class="bio">
              <h1 class="name">Hamed Naderi</h1>
              <p class="profession">Webentwickler</p>
            </div>
          </div>
          <div class="theSidebar-section contact">
            <div class="info-section link">
              <i class="fa-solid fa-phone"></i>
              <span>Telefon:</span>
              <p class="bioInfo">0176 7002 4911</p>
            </div>
            <div class="info-section link">
              <i class="fa-solid fa-location-dot"></i>
              <span>Adresse:</span>
              <p class="bioInfo">Theresiensr. 37, 04129 Leipzig</p>
            </div>
            <div class="info-section link">
              <i class="fa-solid fa-at"></i>
              <span>Email:</span>
              <p class="bioInfo">info@hamed-naderi.de</p>
            </div>
            <div class="info-section link">
              <a target="_blank" rel="author" href="https://github.com/Hamed-Naderi">
                <i class="fa-brands fa-github"></i>
                <span>GitHub:</span>
                <p class="bioInfo">https://github.com/Hamed-Naderi</p>
              </a>
            </div>
            <div class="info-section link">
              <a target="_blank" rel="author" href="https://hamed-naderi.de/">
                <i class="fa-solid fa-globe"></i>
                <span>Website:</span>
                <p class="bioInfo">https://hamed-naderi.de</p>
              </a>
            </div>
            <div class="info-section link">
              <a target="_blank" rel="author" href=<?php echo get_theme_file_uri('data/Lebenslauf.pdf'); ?> download>
                <i class="fa-solid fa-file-arrow-down"></i>
                <span>Download:</span>
                <p class="bioInfo">Lebenslauf herunterladen</p>
              </a>
            </div>
          </div>
          <br><br><br><br>
          <div class="theSidebar-section about">
            <h1 class="title">Über mich</h1>
            <p class="paragraph">
              Ich bin Hamed Naderi und habe hier eine Reisebüro-Website als Portfolio erstellt. 
              <br> Das Theme und Kontaktformular-Plugin habe ich selbst entwickelt.
          </div>
        </div>

        <div class="detail">
          <div class="detail-section edu">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fa-solid fa-briefcase"></i>
              </div>
              <span>Berufliche Laufbahn</span>
            </div>
            <div class="detail-content">
              <div class="timeline-block">
                <h1><b>Webentwickler</b> bei Eponis OHG &nbsp;&nbsp;<time> |&nbsp; 07/2021 - Heute</time></h1>
                <p>Entwickeln der Wordpress-Themes auf Basis von PHP</p>
                <p>Erstellen und Optimieren von Landing Pages</p>
              </div>
              <div class="timeline-block">
                <h1><b>Weiterbildung</b> in Webentwicklung &nbsp;&nbsp;<time> |&nbsp; 09/2020 - 07/2021</time></h1>
                <p>Tutorial von JavaScript und PHP</p>
                <p>Programmierung von WordPress-Themes und Plugins</p>
              </div>
              <div class="timeline-block">
                <h1><b>SPS-Programmierer</b> bei Flexiva Automation & Robotik GmbH &nbsp;&nbsp;<time> |&nbsp; 09/2019 - 09/2020</time></h1>
                <p>Projektierung, Programmierung und Visualisierung von Steuerungen</p>
              </div>
              <div class="timeline-block">
                <h1><b>SPS-Programmierer</b> bei IMC Martin GmbH &nbsp;&nbsp;<time> |&nbsp; 06/2017 - 08/2019</time></h1>
                <p>Erstellung von Programmen für Prozessabläufe in Industrieanlagen</p>
              </div>
              <div class="timeline-block">
                <h1><b>Deutschkurs</b> bei Volkshochschule Chemnitz &nbsp;&nbsp;<time> |&nbsp; 01/2015 - 05/2017</time></h1>
                <p>C1 Niveau</p>
              </div>
              <div class="timeline-block">
                <h1><b>Steuerungsprogrammierer</b> bei Parsian Tavanaye - Iran &nbsp;&nbsp;<time> |&nbsp; 01/2010 - 08/2014</time></h1>
                <p>Programmierung und Entwicklung von Software für Sondermaschinen</p>
              </div>
            </div>
          </div>

          <div class="detail-section edu">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fa-solid fa-graduation-cap"></i>
              </div>
              <span>Bildung</span>
            </div>
            <div class="detail-content">
            <div class="timeline-block">
                <h1><b>Universität Bushehr</b><time> |&nbsp; 09/2006 - 12/2010</time></h1>
                <p>Bachelor Abschluss in Elektroengineering</p>
              </div>
              <div class="timeline-block">
                <h1><b>Haghshenas Jahrom</b><time> |&nbsp; 2006</time></h1>
                <p>Abschluss: Abitur</p>
              </div>
            </div>
          </div>
          <div class="detail-section pg-skill">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fa-solid fa-laptop-code"></i>
              </div>
              <span>Fähigkeiten im Web</span>
            </div>
            <div class="detail-content">
              <ul class="pg-list">
                <li>
                  <span>HTML5</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 77%"></div>
                  </div>
                </li>
                <li>
                  <span>CSS3</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 72%"></div>
                  </div>
                </li>
                <li>
                  <span>Javascript</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 82%"></div>
                  </div>
                </li>
                <li>
                  <span>PHP</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 91%"></div>
                  </div>
                </li>
                <li>
                  <span>WordPress</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 84%"></div>
                  </div>
                </li>
                <li>
                  <span>MySQL</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 70%"></div>
                  </div>
                </li>
                <li>
                  <span>Bootstrap</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 77%"></div>
                  </div>
                </li>
                <li>
                  <span>jQuery</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 75%"></div>
                  </div>
                </li>
                <li>
                  <span>Sass</span>
                  <div class="sb-skeleton">
                    <div class="skillbar" style="--pgbar-length: 60%"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="detail-section">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fa-solid fa-screwdriver-wrench"></i>
              </div>
              <span>Sonstige</span>
            </div>
            <div class="detail-content">
              <div class="outer-frame">
                <ul class="favor-list">
                  <li>
                    <i class="fa-brands fa-git-alt"></i>
                    <span>Git</span>
                  </li>
                  <li>
                    <i class="fa-brands fa-npm"></i>
                    <span>npm</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-gear"></i>
                    <span>REST</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="detail-section myLanguage">
            <div class="detail-title">
              <div class="title-icon">
                <i class="fa-solid fa-language"></i>
              </div>
              <span>Sprachen</span>
            </div>
            <div class="detail-content">
              <ul class="tool-list">
                <li>
                  <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.8"></circle>
                  </svg>
                  <span class="tl-name">Deutsch</span>
                  <span class="tl-exp"> C1 Zertifikat</span>
                </li>
                <li>
                  <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.7"></circle>
                  </svg>
                  <span class="tl-name">Englisch</span>
                  <span class="tl-exp">Sehr gut</span>
                </li>
                <li>
                  <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45" style="--percent: 0.9"></circle>
                  </svg>
                  <span class="tl-name">Persisch</span>
                  <span class="tl-exp">Muttersprache</span>
                </li>
              </ul>
            </div>     
          </div>
        </div>
      </div>
</body>
</html>

<?php
get_footer();
?>