	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>            
</html>
<style type="text/css">
.card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    height: 230px;
    overflow: hidden;
    padding: 20px;
    position: relative;
    width: 300px;
    bottom: 30px;
    margin-bottom: 0px;
}
.title {
   color: black;
     text-transform:  capitalize;
   font-weight:  bold;
    letter-spacing: 2px;
   font-size: 19px;
    height: 29px;
    margin-bottom: 0;
    margin-top: 0px;
    text-align: center;
}
.text {
  color: #667;
  font-size: 1em;
  height: 38px;
  margin: 5px 0 0;
}
.newsform {
  transform-origin: 0 50%;
  transition: transform 500ms, opacity 500ms;
}
.input {
  background: transparent;
  border: 0;
  box-sizing: border-box;
  font-size: 20px;
  height: 40px;
  margin-top: 20px;
  outline: none !important;
  position: relative;
  width: 300px;
}

</style>



<footer class="is-full">
  <div class="footer--full">
    <div class="container">
      <div class="row">
        <div class="col-md-4 comcol">
          <div class="row">

            <div class="card">
              <h2 class="title">community</h2>
                <ul class="footer-social footer-social-icons">
                    <li>
                      <a href="#" target="_blank">
                         <i class="fab fa-facebook-square iconstyle" ></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                         <i class="fab fa-instagram iconstyle"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <i class="fab fa-twitter-square iconstyle"></i></a>
                    </li>
                  </ul>
                  
                  <form class="newsform" action="">
                  <input type="text" name="news" placeholder="email">
                  <div class="nbtn">
                  <a class="waves-effect waves-light btn newsbtnn">contact</a></div>
                  </form>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="row">
            <div class="col-xs-6">
              <dl class="footer-list first">
                <dt>products</dt>
                <dd>hair</dd>
                <dd>skin</dd>
                <dd>tattoo</dd>
                
              </dl>
            </div>
            <div class="col-xs-6">
              <dl class="footer-list">
                <dt></dt>
                <dd>combo</dd>
                <dd>gift</dd>
                <dd>beard</dd>
                <dd>tool</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="row">
            <div class="col-xs-6">
              <dl class="footer-list">
                <dt>order</dt>
                <dd>account</dd>
                <dd>card</dd>
                <dd>wishlist</dd>
                <dd>track order</dd>
              </dl>
            </div>
            <div class="col-xs-6">
              <dl class="footer-list">
                <dt></dt>
                <dd>tearm and conditions</dd>
                <dd>private policty</dd>
                <dd>return & refund policy</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <dl class="footer-list footer-list-horizontal first">
            <dt>quick link</dt>
            <dd><a href="#" target="_blank" rel="noopener">who we are</a></dd>
            <dd><a href="#" target="_blank" rel="noopener">community</a></dd>
            <dd><a href="#" target="_blank" rel="noopener">blog</a></dd>
            <dd><a href="#" target="_blank" rel="noopener">contact us</a></dd>
            <dd><a href="#" target="_blank" rel="noopener">btm rewards</a></dd>
            <dd><a href="#" target="_blank" rel="noopener">careers</a></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="copyright">Copyright © 2018, be the mard. All Rights Reserved.</div>
      <div class="base-links"><a href="#">Privacy Statement</a><a href="#">Terms & Conditions</a><a href="#">Sitemap</a></div>
    </div>
  </div>
</footer>

<style type="text/css">
.iconstyle {
  color: black;
    padding-right: 15px;
    font-size:  28px;
    padding-left:  0px;
}
.col-md-4.comcol {
    position:  relative;
        top: 25px;
}
.constyle
{
  font-size: 24px;
}
.nbtn {
    text-align:  center;
}

.nbtn a {
    background:  black;
    position:  relative;
    top: 11px;
    border-radius: 33px;
    width: 123px;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
body {
  font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Noto Sans', Ubuntu, 'Droid Sans', 'Helvetica Neue', Arial, sans-serif;
  
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
  margin: 0;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dd,
dt {
  line-height: 1.42857143;
}
dt {
      font-size: 18px;
  font-weight: 700;
}
dd {
  font-size: 14px !important;
  margin-left: 0;
}
/*.row {
  margin-left: -15px;
  margin-right: -15px;
}*/
.row:before,
.container:before,
.row:after,
.container:after {
  clear: both;
  content: " ";
  display: table;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.text-center {
  text-align: center;
}
[class*="col-xs-"],
[class*="col-sm-"],
[class*="col-md-"],
[class*="col-lg-"] {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
[class*="col-xs-"] {
  float: left;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-pull-6 {
  right: 50%;
}
@media (min-width: 768px) {
  [class*="col-sm-"] {
    float: left;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-pull-0 {
    right: auto;
  }
}
@media (min-width: 992px) {
  [class*="col-md-"] {
    float: left;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
label {
  cursor: pointer;
}
footer {
  position: relative;
  color: white;
  margin-top: 1rem;
}
footer a,
footer a:hover {
  color: white;
}
footer dt {
  text-transform: capitalize;
      color: #ffffff;
}
footer dd {
  text-transform: capitalize;
  margin-top: 1rem;
}
footer.is-full:before {
  display: block;
  position: absolute;
  top: -10px;
  left: 0;
  right: 0;
  height: 12px;
  content: "";
     background: linear-gradient(45deg, #111010 6px, transparent 0), linear-gradient(-45deg, #000000 6px, transparent 0);
  background-repeat: repeat-x;
  background-position: left top;
  background-size: 12px 12.001px;
}
.footer--full {
     background-color: #0c0b0bfa;
  display: none;
}
.is-full .footer--full {
  display: block;
  padding-top: 3rem;
}
.footer {
  background-color: #0b4a84;
  color: white;
  font-size: 0.75rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}
.footer .container {
  padding-top: 0.75rem;
  padding-bottom: 0.25rem;
  display: flex;
  flex-direction: column-reverse;
  text-align: center;
  justify-content: space-between;
  position: relative;
}
.footer .container:before {
  position: absolute;
  top: -0.25rem;
  left: 1rem;
  right: 1rem;
  background-color: #85a4c1;
  content: "";
  display: block;
  height: 0.5rem;
}
.is-full .footer .container:before {
  display: none;
}
.footer .container:after {
  content: none;
}
@media (min-width: 768px) {
  .footer .container {
    flex-direction: row;
  }
  .footer .container:before {
    left: 0;
    right: 0;
  }
}
.is-full .footer {
  background-color: black;
  color: #999;
}
.footer-logo {
  margin-top: 1.5rem;
  margin-bottom: 12px;
}

.footer-contact-info {
  color: #59cbfb;
  font-size: 0.75rem;
  margin: 1rem 0;
}
.footer-contact-info em {
  color: #fff;
  font-style: normal;
  white-space: nowrap;
}
.footer-social {
  text-align: center;
  padding-left: 0;
  margin: 1rem 0;
}
.footer-social li {
  display: inline;
  line-height: 1;
}
.social-icon {
  
  display: inline-block;
  margin-right: 0.25em;
  height: 26px;
  width: 26px;
  text-indent: -5000px;
}
.social-googleplus {
  background-position: 0 -60px;
}
.social-weibo {
  background-position: 0 -150px;
}
.social-twitter {
  background-position: 0 -30px;
}
.social-feed {
  background-position: 0 -210px;
}
.footer-list {
  margin: 20px;
  position: static;
}
@media (min-width: 768px) {
  .footer-list:not(.first):before {
    position: absolute;
    top: 0;
    left: -6px;
    display: inline-block;
    width: 2px;
    height: 190px;
    content: " ";
   border-right: 1px solid #ffffff;
    border-left: 1px solid #cebfbf47;
  }
}
.footer-list-horizontal {
  display: inline-block;
  font-size: 0.75rem;
  line-height: 1.333333;
}
.footer-list-horizontal dt,
.footer-list-horizontal dd {
  display: inline-block;
  margin: 0 0.5em 0 0;
}
.footer-list-horizontal dt:after,
.footer-list-horizontal dd:not(:last-child):after {
  margin-left: 0.5em;
  content: "|";
  color: #5bcbfb;
  font-weight: normal;
}
@supports (--css: variables) {
  :root {
    --list-font-size: 1rem;
    --local-text-align: center;
  }
  @media (min-width: 768px) {
    :root {
      --local-text-align: left;
    }
  }
  @media (min-width: 992px) {
    :root {
      --list-font-size: 0.875rem;
    }
  }
  footer {
    text-align: var(--local-text-align);
  }
  footer dd {
    font-size: var(--list-font-size);
  }
}
.copyright,
.base-links {
  padding: 0.5rem 1rem;
}
.copyright a,
.base-links a {
  display: inline-block;
}
.copyright a:not(:first-child),
.base-links a:not(:first-child) {
  margin-left: 1.4em;
  position: relative;
}
.copyright a:not(:first-child):before,
.base-links a:not(:first-child):before {
  position: absolute;
  top: 0;
  left: -0.8em;
  content: "|";
}
.is-full .copyright,
.is-full .base-links {
  padding-left: 0;
  padding-right: 0;
}
.is-full .copyright a,
.is-full .base-links a,
.is-full .copyright a:hover,
.is-full .base-links a:hover {
  color: #999;
}

</style>

<script type="text/javascript">
  $('#full-footer').change(function(){
  $('footer').toggleClass('is-full', this.checked)
}).change();
</script>

<style type="text/css">
  .mfooter
  {
    background: rgb(0, 0, 0);
  }
  .copfooter
  {
    background: #52505047 !important;
  }
</style>