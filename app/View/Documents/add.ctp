<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
   
    <?php echo $this->Html->css('bootstrap-tagsinput');  ?>
    <?php echo $this->Html->script('locationpicker.jquery.min');  ?>
<style type="text/css">

      .placepicker-map {
        width: 100%;
        height: 300px;
      }

      .another-map-class {
        width: 100%;
        height: 300px;
      }

      .pac-container {
        border-radius: 5px;
      }

.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}


.divselectone{
  height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
    cursor: pointer;

}
.demoInputBox{padding:5px; border:#F0F0F0 1px solid; border-radius:4px; background-color:#FFF;}
#progress-bar {background-color: #12CC1A;height:73px;color: #FFFFFF;width:0%;-webkit-transition: width .3s;-moz-transition: width .3s;transition: width .3s;}
.btnSubmit{background-color:#09f;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}

#targetLayer{width:100%;text-align:center;}

</style>
<?php echo $this->Html->script('jquery.form.min');  ?>
<script type="text/javascript">
$(document).ready(function() { 
     $('#uploadForm').submit(function(e) {  
        if($('#userImage').val()) {
            e.preventDefault();
            $('#loader-icon').show();
            $(this).ajaxSubmit({ 
                target:   '#targetLayer', 
                beforeSubmit: function() {
                  $("#progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){ 
                    $("#progress-bar").width(percentComplete + '%');
                    $("#compteur").html('<i>'+percentComplete + '%'+'</i>');
                    $("#progress-bar").html('<div id="progress-status" style="margin-top: -66px;display: flex;"></div>')
                },
                success:function (){
                    $('#loader-icon').hide();
                },
                resetForm: true 
            }); 
            return false; 
        }
    });
}); 

</script>

<script type="text/javascript">
$(document).ready(function() {
   
	//////**********sector**///////
$('#sector').live('click',function(){
if($('#sectors').is(':visible'))
{
$('#sectors').hide("");	
}else
{
$('#sectors').show("");
$('#sectors').css('overflow-y', 'auto');
}
});
////////////////////////////////////////////
//////**********visibility**///////
$('#visibility').live('click',function(){
if($('#visibilitys').is(':visible'))
{
$('#visibilitys').hide("");	
}else
{
$('#visibilitys').show("");
$('#visibilitys').css('overflow-y', 'auto');
}
});
////////////////////////////////////////////
//////**********Language**///////
$('#Language').live('click',function(){
if($('#languges').is(':visible'))
{
$('#languges').hide("");	
}else
{
$('#languges').show("");
$('#languges').css('overflow-y', 'auto');
}
});
////////////////////////////////////////////
//////**********categorie**///////
$('#categorie').live('click',function(){
if($('#categories').is(':visible'))
{
$('#categories').hide("");	
}else
{
$('#categories').show("");
$('#categories').css('overflow-y', 'auto');
}
});
////////////////////////////////////////////
//////**********customer**///////
$('#customer').live('click',function(){
if($('#customers').is(':visible'))
{
$('#customers').hide("");	
}else
{
$('#customers').show("");
$('#customers').css('overflow-y', 'auto');
}
});
////////////////////////////////////////////
});

</script>
     
<?php echo $this->Form->create('Document',array('type'=>'file','id'=>'uploadForm')); ?>
	<?php
		echo $this->Form->input('price',array('label'=>false, 'type'=>'hidden','value'=>'0'));
		echo $this->Form->input('creation_date',array('label'=>false, 'type'=>'hidden','value'=>date("20y-m-d H:S")));
	?>
    <div class="al-main">
      <div class="al-content">
     <div id="over" style=" width:100%; height:100%">
</div>   
                
        
			<div class="col-md-6 col-md-offset-3">	  
<div ba-panel="" ba-panel-title="Standard Fields" ba-panel-class="with-scroll">
    <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur="" style="background-size: 1530px 861px; background-position: 0px -64px;">
    <div class="panel-heading clearfix"><h3 class="panel-title">Upload Document</h3>
    </div>
                    <div style="padding-top: 14px;">
					
                        <form role="form">
						
                            <div class="form-group">

                              <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Enter your name"  tabindex="1" >
                            </div>							
							 <div class="form-group">
							
                               <input type="text" name="them" id="theme" class="form-control input-lg" placeholder="Enter the theme" tabindex="2">
                            </div>
                           
                            <div class="form-group">
							
                                <textarea class="form-control input-lg" rows="5" id="comment" placeholder="Description" tabindex="3" name="description"></textarea>
                            </div>
						
							
                            <div class="form-group">

                                <input type="text" value="" name="keyword" data-role="tagsinput" class="form-control input-lg" placeholder="Enter your keywords" tabindex="4"> 
                            </div>
							
                            <div class="form-group">
							
                                <input type="name" name="country" id="us2-address" class="form-control input-lg placepicker" placeholder="Country"  tabindex="5" list="country">
            <div id="us2" style="width: 550px; height: 400px; display:none"></div>
                    <script>$('#us2').locationpicker({
                        location: {latitude: 56.503572, longitude: -106.4689},
                        radius: 800,
                        inputBinding: {
                            locationNameInput: $('#us2-address')
                        },
                        enableAutocomplete: true
                    });</script>
                            </div>
							<div class="form-group">
							
                                <select class="form-control input-lg" name="visibility" placeholder="">
								<option>Select your visibility</option>
                                <option>public</option>
                                <option>protected</option>
                                <option>private</option>
                                
                                </select>

                            </div>
                            <div class="form-group">
							<div class="form-control divselectone" id="sector" ><?php echo __("Select your Sector");?><span class="glyphicon glyphicon-triangle-bottom" style="float: right;top: 6px;"></span></div>
        <div class="[ form-group ] divselect" id="sectors">
        	<?php foreach ($Sectors as $Sector)
          {
        		?>
            <input type="checkbox" name="s[<?php echo $Sector['Sector']['id'];?>]" id="s<?php echo $Sector['Sector']['id'];?>" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="s<?php echo $Sector['Sector']['id'];?>" class="[ btn btn-default ]" >
                    <span class="[ glyphicon glyphicon-plus ]"></span>
                    <span class="[ glyphicon glyphicon-minus ]"></span>
                </label>
                <label for="s<?php echo $Sector['Sector']['id']?>" class="[ btn btn-default active ] divliste" >
                    <?php echo $Sector['Sector']['description'];?>
                </label>
            </div>
      <?php } ?>  
        </div>
                          </div>
                           
                           <div class="form-group">
							<div class="form-control divselectone" id="Language" ><?php echo __("Select your Language ");?><span class="glyphicon glyphicon-triangle-bottom" style="float: right;top: 6px;"></span></div>
        <div class="[ form-group ] divselect" id="languges">
        	<?php foreach ($Languges as $Language)
          {
        		?>
            <input type="checkbox" name="l[<?php echo $Language['Language']['id'];?>]" id="l<?php echo $Language['Language']['id'];?>" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="l<?php echo $Language['Language']['id'];?>" class="[ btn btn-default ]" >
                    <span class="[ glyphicon glyphicon-plus ]"></span>
                    <span class="[ glyphicon glyphicon-minus ]"></span>
                </label>
                <label for="l<?php echo $Language['Language']['id']?>" class="[ btn btn-default active ] divliste" >
                    <?php echo $Language['Language']['name'];?>
                </label>
            </div>
      <?php } ?>  
        </div>
                          </div>
                           <div class="form-group">
							<div class="form-control divselectone" id="categorie" ><?php echo __("Select your Categorie");?><span class="glyphicon glyphicon-triangle-bottom" style="float: right;top: 6px;"></span></div>
        <div class="[ form-group ] divselect" id="categories">
        	<?php foreach ($Categorys as $Category)
          {
        		?>
            <input type="checkbox" name="c[<?php echo $Category['Category']['id'];?>]" id="c<?php echo $Category['Category']['id'];?>" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="c<?php echo $Category['Category']['id'];?>" class="[ btn btn-default ]" >
                    <span class="[ glyphicon glyphicon-plus ]"></span>
                    <span class="[ glyphicon glyphicon-minus ]"></span>
                </label>
                <label for="c<?php echo $Category['Category']['id']?>" class="[ btn btn-default active ] divliste">
                    <?php echo $Category['Category']['description'];?>
                </label>
            </div>
      <?php } ?>  
        </div>
                          </div>
                            
							 <div class="form-group">
							<div class="form-control divselectone" id="customer" ><?php echo __("Select your Customer");?><span class="glyphicon glyphicon-triangle-bottom" style="float: right;top: 6px;"></span></div>
        <div class="[ form-group ] divselect" id="customers">
        	<?php foreach ($Customers as $Customer)
          {
        		?>
            <input type="checkbox" name="u[<?php echo $Customer['Customer']['id'];?>]" id="u<?php echo $Customer['Customer']['id'];?>" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="u<?php echo $Customer['Customer']['id'];?>" class="[ btn btn-default ]" >
                    <span class="[ glyphicon glyphicon-plus ]"></span>
                    <span class="[ glyphicon glyphicon-minus ]"></span>
                </label>
                <label for="u<?php echo $Customer['Customer']['id']?>" class="[ btn btn-default active ] divliste" >
                    <?php echo $Customer['Customer']['description'];?>
                </label>
            </div>
      <?php } ?>  
        </div>
                          </div>
                            <div id="progress-div">
        <label class="form-control col-md-2" style="width: 200px;height: 52px;">
                Add main Document
            
                 <?php echo $this->Form->file('upload',array('label'=>false,
                 'style'=>'display: none','id'=>'userImage'));?>
   
          </label>

               
              
              <label class="form-control col-md-2 "style=" width: 300px;height: 52px;float: right;;">Add associated Document(s)
                <span  class="glyphicon glyphicon-paperclip btn btn-default"></span> 
                 <?php echo $this->Form->file('file.',array('label'=>false,'multiple',
                 'style'=>'display: none','id'=>'userImage'));?>
             </label>   


<div id="progress-bar"></div>
                            
                            </div>
                            <div id="targetLayer"></div> 
                                    <div id="loader-icon" style="display:none"><img src="../img/LoaderIcon.gif" />
                                <span id="compteur" style="margin-top: 104px;margin-left: -115px;position: absolute;">100%</span></div>          
                            <div class="form-group">
                                <input type="submit" name="submit" id="name" class="form-control input-lg"  tabindex="1">
                            </div>		
				





                        </form>											
                </div>
                 </div>
             </div></div>
  </div>
	</div>  	
	  </div>
	  <?php echo $this->Form->end(__('')); ?>
 <?php  echo $this->Html->script('bootstrap-tagsinput.min');  ?>

<datalist id="country">
    <option >Afghanistan</option>
    <option >Åland Islands</option>
    <option >Albania</option>
    <option >Algeria</option>
    <option >American Samoa</option>
    <option >Andorra</option>
    <option >Angola</option>
    <option >Anguilla</option>
    <option >Antarctica</option>
    <option >Antigua and Barbuda</option>
    <option >Argentina</option>
    <option >Armenia</option>
    <option >Aruba</option>
    <option >Australia</option>
    <option >Austria</option>
    <option >Azerbaijan</option>
    <option >Bahamas</option>
    <option >Bahrain</option>
    <option >Bangladesh</option>
    <option >Barbados</option>
    <option >Belarus</option>
    <option >Belgium</option>
    <option >Belize</option>
    <option >Benin</option>
    <option >Bermuda</option>
    <option >Bhutan</option>
    <option >Bolivia, Plurinational State of</option>
    <option >Bonaire, Sint Eustatius and Saba</option>
    <option >Bosnia and Herzegovina</option>
    <option >Botswana</option>
    <option >Bouvet Island</option>
    <option >Brazil</option>
    <option >British Indian Ocean Territory</option>
    <option >Brunei Darussalam</option>
    <option >Bulgaria</option>
    <option >Burkina Faso</option>
    <option >Burundi</option>
    <option >Cambodia</option>
    <option >Cameroon</option>
    <option >Canada</option>
    <option >Cape Verde</option>
    <option >Cayman Islands</option>
    <option >Central African Republic</option>
    <option >Chad</option>
    <option >Chile</option>
    <option >China</option>
    <option >Christmas Island</option>
    <option >Cocos (Keeling) Islands</option>
    <option >Colombia</option>
    <option >Comoros</option>
    <option >Congo</option>
    <option >Congo, the Democratic Republic of the</option>
    <option >Cook Islands</option>
    <option >Costa Rica</option>
    <option >Côte d'Ivoire</option>
    <option >Croatia</option>
    <option >Cuba</option>
    <option >Curaçao</option>
    <option >Cyprus</option>
    <option >Czech Republic</option>
    <option >Denmark</option>
    <option >Djibouti</option>
    <option >Dominica</option>
    <option >Dominican Republic</option>
    <option >Ecuador</option>
    <option >Egypt</option>
    <option >El Salvador</option>
    <option >Equatorial Guinea</option>
    <option >Eritrea</option>
    <option >Estonia</option>
    <option >Ethiopia</option>
    <option >Falkland Islands (Malvinas)</option>
    <option >Faroe Islands</option>
    <option >Fiji</option>
    <option >Finland</option>
    <option >France</option>
    <option >French Guiana</option>
    <option >French Polynesia</option>
    <option >French Southern Territories</option>
    <option >Gabon</option>
    <option >Gambia</option>
    <option>Georgia</option>
    <option >Germany</option>
    <option >Ghana</option>
    <option >Gibraltar</option>
    <option >Greece</option>
    <option >Greenland</option>
    <option >Grenada</option>
    <option >Guadeloupe</option>
    <option >Guam</option>
    <option >Guatemala</option>
    <option >Guernsey</option>
    <option >Guinea</option>
    <option >Guinea-Bissau</option>
    <option >Guyana</option>
    <option >Haiti</option>
    <option >Heard Island and McDonald Islands</option>
    <option >Holy See (Vatican City State)</option>
    <option >Honduras</option>
    <option >Hong Kong</option>
    <option >Hungary</option>
    <option >Iceland</option>
    <option >India</option>
    <option >Indonesia</option>
    <option >Iran, Islamic Republic of</option>
    <option >Iraq</option>
    <option >Ireland</option>
    <option >Isle of Man</option>
    <option >Italy</option>
    <option >Jamaica</option>
    <option >Japan</option>
    <option >Jersey</option>
    <option >Jordan</option>
    <option >Kazakhstan</option>
    <option >Kenya</option>
    <option >Kiribati</option>
    <option >Korea, Democratic People's Republic of</option>
    <option >Korea, Republic of</option>
    <option >Kuwait</option>
    <option >Kyrgyzstan</option>
    <option >Lao People's Democratic Republic</option>
    <option >Latvia</option>
    <option >Lebanon</option>
    <option >Lesotho</option>
    <option >Liberia</option>
    <option >Libya</option>
    <option >Liechtenstein</option>
    <option >Lithuania</option>
    <option >Luxembourg</option>
    <option >Macao</option>
    <option >Macedonia, the former Yugoslav Republic of</option>
    <option >Madagascar</option>
    <option >Malawi</option>
    <option >Malaysia</option>
    <option >Maldives</option>
    <option >Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Réunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthélemy</option>
    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin (French part)</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten (Dutch part)</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela, Bolivarian Republic of</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
  </datalist>
