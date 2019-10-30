
<div class="wrap">
  <h1 class="wp-heading-inline">Custom menu</h1>
    <p><em>Your only option for custom menus</em></p>
  <hr>
  <div class="d-flex flex-row-reverse sm-adm-top-btns">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-secondary active">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> Desktop
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options" id="option2" autocomplete="off"> Mobile
      </label>
    </div>
  </div>

  <div class="container-fluid px-0 pt-2 sm-admin-stngs">
    <div class="row">
      <div class=" col-2 sm-admin-st-menu">
        <button id="defaultLog" class="ipmon-bar-item tablink" onclick="openLink(event, 'IP-log')">Quick select</button>
        <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Logins')">Layout</button>
        <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Failed-logins')">Color</button>
        <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Banned-IPs')">Fonts</button>
        <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Login-settings')">Behavior</button>
        <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Alerts')">Details</button>
      </div><!--end .sm-admin-st-menu-->

      <div class="col-10 px-3">
        <div id="IP-log" class="w3-container city ipmon-animate-opacity" style="display:none">
        </div>



        <div id="Logins" class="w3-container city ipmon-animate-opacity" style="display:none">
          <h2>Successful logins</h2>
          <?php 
          //include 'ip_tables_template.php';
           ?>
        </div>

        <div id="Failed-logins" class="w3-container city ipmon-animate-opacity" style="display:none">
          <h2>Failed logins</h2>
          <?php 
          //include 'ip_tables_template.php';
           ?>
        </div>

        <div id="Banned-IPs" class="w3-container city ipmon-animate-opacity" style="display:none">
          <h2>Banned IP addresses</h2>
          <?php 
          //include 'ip_tables_template.php';
           ?>
        </div>

        <div id="Login-settings" class="w3-container city ipmon-animate-opacity" style="display:none">
          <h2>Login security settings</h2>
          <p>London is the capital city of England.</p>
          <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
        </div>

        <div id="Alerts" class="w3-container city ipmon-animate-opacity" style="display:none">
          <h2>Alerts and notifications setiings</h2>
          <p>Paris is the capital of France.</p> 
          <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
        </div>
        <div class="sm-adm-dsktp">
          <div class="px-2 sm-adm-dsktp-frm-top">
            <div class="rounded-circle">x - +</div>
          </div>
          <div class="sm-adm-prevw">
            <?php include SM_SET_DIR .'/inc/smart-menu.php'?>
          </div>
          <div class="px-4">
            <div class="card-deck">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Content</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Content</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Content</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div><!-- end .card-deck-->
            </div>
          </div>
        </div>
      </div><!-- end .ipmon-content-->
    </div><!-- end .row-->
  </div><!-- end .sm-admin-stngs-->
</div><!-- end .wraper-->


<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" ipmon-bar-item-dark", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " ipmon-bar-item-dark";
}

document.getElementById("defaultLog").click();
</script>