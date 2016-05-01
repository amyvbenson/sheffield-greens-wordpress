<?php
/*
Template Name: Council Election results 2010
*/
?>

<?php get_header(); ?>

<div id="main-container">
		<div id="container">
        
			<div id="post">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>

<div class="page">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<table width="100%" border="1">
              <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Sheffield City Council Election Result 2010 Overall</h1>
                </td>
              </tr>
              <tr align="left" valign="top"> 
                <td width="27%"><b>Party </b></td>
                
        <td width="10%" align="center"><b>Seats this election</b></td>
                
        <td width="10%" align="center"><b>New make up of Council </b></td>
                <td width="12%" align="center"><b>Net Gain &amp; Loss</b></td>
                <td width="10%" align="center">
          <p><b>Seats % at this election</b></p>
          </td>
                
        <td width="10%" align="center"><b> Total Votes</b></td>
        <td width="10%" align="center"><b>% of votes at this election</b></td>
        <td width="12%" align="center"><b>Number of votes per seat</b></td>
              </tr>
              
              <tr> 
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
                <td width="10%" height="18" align="center">0</td>
                <td width="10%" height="18" align="center">0</td>
                <td width="12%" height="18" align="center" >0</td>
                <td width="10%" height="18" align="center">0</td>
                
        <td width="10%" height="18" align="center">9103</td>
                
        <td width="10%" height="18" align="center">3.9</td>
                
        <td width="12%" height="18" align="center">more 
          than 9103</td>
              </tr>
              <tr> 
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
                <td width="10%" height="18" align="center">0</td>
                <td width="10%" height="18" align="center">0</td>
                <td width="12%" height="18" align="center">0</td>
                <td width="10%" height="18" align="center">0</td>
                
        <td width="10%" height="18" align="center">35141</td>
                
        <td width="10%" height="18" align="center">14.5</td>
                
        <td width="12%" height="18" align="center">more 
          than 35141</td>
              </tr>
              <tr> 
                <td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
                  Party</td>
                <td width="10%" align="center">0</td>
                
        <td width="10%" align="center">2</td>
                
        <td width="12%" align="center">-1</td>
                
        <td width="10%" align="center">0%</td>
                
        <td width="10%" align="center">15272</td>
                
        <td width="10%" align="center">6.3</td>
                
        <td width="12%" align="center">more than 15272</td>
              </tr>
              <tr> 
                
        <td style="font-weight: bold;"  width="27%" bgcolor="#993300">English 
          Democrats </td>
                <td width="10%" align="center">0</td>
                <td width="10%" align="center">0</td>
                <td width="12%" align="center">0</td>
                <td width="10%" align="center">0</td>
                
        <td width="10%" align="center">748</td>
                
        <td width="10%" align="center">0.3</td>
                
        <td width="12%" align="center">more than 748</td>
              </tr>
			   <tr> 
                <td style="font-weight: bold;"  width="27%" bgcolor="#FFFFFF">Independent</td>
                <td width="10%" align="center">0</td>
                
        <td width="10%" align="center">1</td>
                <td width="12%" align="center">0</td>
                <td width="10%" align="center">0</td>
                
        <td width="10%" align="center">143</td>
                
        <td width="10%" align="center">0.1</td>
        <td width="12%" align="center">more than 143</td>
              </tr>
              <tr> 
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#FF0000">Labour</td>
                
        <td width="10%" align="center">16</td>
                
        <td width="10%" align="center">39</td>
                
        <td width="12%" align="center">+3</td>
                
        <td width="10%" align="center">57%</td>
                
        <td width="10%" align="center">85708</td>
                
        <td width="10%" align="center">35.4</td>
                
        <td width="12%" align="center">5356</td>
              </tr>
              <tr> 
                <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                
        <td width="10%" align="center">12</td>
                
        <td width="10%" align="center">42</td>
                
        <td width="12%" align="center">-2</td>
                
        <td width="10%" align="center">43%</td>
                
        <td width="10%" align="center">87076</td>
        <td width="10%" align="center">35.9</td>
                
        <td width="12%" align="center">7256</td>
              </tr>
              <tr> 
                
        <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#CC0000">Trade 
          Union and Socialist</td>
                <td width="10%" align="center">0</td>
                <td width="10%" align="center">0</td>
                <td width="12%" align="center">0</td>
                <td width="10%" align="center">0</td>
                
        <td width="10%" align="center">865</td>
        <td width="10%" align="center">0.4</td>
                
        <td width="12%" align="center">more than 865</td>
              </tr>
              <tr> 
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
                <td width="10%" height="2" align="center">0</td>
                <td width="10%" height="2" align="center">0</td>
                <td width="12%" height="2" align="center">0</td>
                <td width="10%" height="2" align="center">0</td>
                
        <td width="10%" height="2" align="center">8232</td>
                
        <td width="10%" height="2" align="center">3.4</td>
                
        <td width="12%" height="2" align="center">more than 
          8223 </td>
              </tr>
              <tr> 
                <td colspan="5">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
              </tr>
              <tr> 
                <td align="right" colspan="5"><strong>Turnout</strong></td>
                
        <td width="10%" align="center">212416</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="12%" align="center">&nbsp;</td>
              </tr>
            </table>


* means defending Party or Councillor<br />

           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  
          <h1 style="color: #000000" align="center">Arbourthorne Ward </h1>
                </td>
  </tr>
  <tr>

    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
    <td height="17" align="center">Joanne THOMAS</td>
        <td height="17" align="center">682</td>
        <td height="17" align="center">9.9</td>
        <td height="17" align="center">+10</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
    <td height="17" width="41%" align="center">Peter SMITH</td>
        <td height="17" width="12%" align="center">826</td>
        <td height="17" width="10%" align="center">12.0</td>
        <td height="17" width="10%" align="center">-7</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
    <td width="41%" align="center">Jennyfer BARNARD</td>
        <td width="12%" align="center">242</td>
        <td width="10%" align="center">3.5</td>
        <td width="10%" align="center">-7</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
    <td width="41%" align="center">Jack SCOTT</td>
        <td width="12%" align="center">3247</td>
        <td width="10%" align="center">47.2</td>
        <td width="10%" align="center">+6</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
    <td width="41%" align="center">Jayne DORE</td>
        <td width="12%" align="center">1888</td>
        <td width="10%" align="center">27.4</td>
        <td width="10%" align="center">-1</td>
  </tr>
 
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          Hold Majority</strong></td>
        <td width="12%" align="center">1359</td>
        <td width="10%" align="center">19.7</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">6885</td>
    <td width="10%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />

<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  
          <h1 style="color: #000000">Beauchief and Greenhill Ward Lib Dem hold 
          </h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">John Winston BEATSON</td>
        <td height="17" align="center">689</td>
        <td height="17" align="center">8.3</td>
        <td height="17" align="center">-2</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Michelle 
          GRANT</td>
        <td height="17" width="12%" align="center">1015</td>
        <td height="17" width="10%" align="center">12.3</td>
        <td height="17" width="10%" align="center">-6</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Christina HESPE</td>
        <td width="12%" align="center">333</td>
        <td width="10%" align="center">4.0</td>
        <td width="10%" align="center">-1</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Ajaz AHMED</td>
        <td width="12%" align="center">2622</td>
        <td width="10%" align="center">31.6</td>
        <td width="10%" align="center">+5</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Clive Anthony SKELTON*</td>
        <td width="12%" align="center">3626</td>
        <td width="10%" align="center">43.8</td>
        <td width="10%" align="center">+4</td>
  </tr>
  


  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">1004</td>
        <td width="10%" align="center">12.1</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8285</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Beighton Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Matthew Joseph GOULDSBROUGH</td>
        <td height="17" align="center">525</td>
        <td height="17" align="center">6.4</td>
        <td height="17" align="center">+6</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Shirley Diane 
          CLAYTON</td>
        <td height="17" width="12%" align="center">1606</td>
        <td height="17" width="10%" align="center">19.5</td>
        <td height="17" width="10%" align="center">-11</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Andrew Julian BRANDRAM</td>
        <td width="12%" align="center">229</td>
        <td width="10%" align="center">2.8</td>
        <td width="10%" align="center">-5</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Helen MIRFIN-BOUKOURIS*</td>
        <td width="12%" align="center">3650</td>
        <td width="10%" align="center">44.2</td>
        <td width="10%" align="center">+1</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Robbie COWBURY</td>
        <td width="12%" align="center">1988</td>
        <td width="10%" align="center">24.1</td>
        <td width="10%" align="center">+5</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Wayne Anthony HARLING</td>
        <td align="center">259</td>
        <td align="center">3.1</td>
        <td align="center">+3</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          Hold Majority</strong></td>
        <td width="12%" align="center">1622</td>
        <td width="10%" align="center">20.1</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8257</td>
    <td width="10%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Birley Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Michael SMITH</td>
        <td height="17" align="center">597</td>
        <td height="17" align="center">7.1</td>
        <td height="17" align="center">+7</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Gordon Ronald 
          MILLWARD</td>
        <td height="17" width="12%" align="center">1063</td>
        <td height="17" width="10%" align="center">12.6</td>
        <td height="17" width="10%" align="center">-7</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Frank PLUNKETT</td>
        <td width="12%" align="center">821</td>
        <td width="10%" align="center">9.7</td>
        <td width="10%" align="center">0</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Karen Lesley MCGOWAN</td>
        <td width="12%" align="center">3790</td>
        <td width="10%" align="center">45.0</td>
        <td width="10%" align="center">-3</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Diana STIMELY</td>
        <td width="12%" align="center">1778</td>
        <td width="10%" align="center">21.1</td>
        <td width="10%" align="center">-1</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Graham CHEETHAM</td>
        <td align="center">372</td>
        <td align="center">4.4</td>
        <td align="center">+4</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">2012</td>
        <td width="10%" align="center">23.9</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8421</td>
        <td width="10%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Broomhill Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Michael Lawrence 
          GINN</td>
        <td height="17" width="12%" align="center">938</td>
        <td height="17" width="10%" align="center">11.7</td>
        <td height="17" width="10%" align="center">-1</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Bernard James LITTLE</td>
        <td width="12%" align="center">1389</td>
        <td width="10%" align="center">17.3</td>
        <td width="10%" align="center">-10</td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Mohammed AKBAR</td>
        <td width="12%" align="center">1798</td>
        <td width="10%" align="center">22.4</td>
        <td width="10%" align="center">+8</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Shaffaq MOHAMMED*</td>
        <td width="12%" align="center">3734</td>
        <td width="10%" align="center">46.6</td>
        <td width="10%" align="center">0</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Pat SULLIVAN</td>
        <td align="center">155</td>
        <td align="center">1.9</td>
        <td align="center">+2</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">1936</td>
        <td width="10%" align="center">24.2</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8014</td>
        <td width="10%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Burngreave Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Russell Craig 
          CUTTS</td>
        <td height="17" width="12%" align="center">801</td>
        <td height="17" width="10%" align="center">9.5</td>
        <td height="17" width="10%" align="center">-3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Christopher John SISSONS</td>
        <td width="12%" align="center">590</td>
        <td width="10%" align="center">7.0</td>
        <td width="10%" align="center">-7</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Talib HUSSAIN</td>
        <td width="12%" align="center">4892</td>
        <td width="10%" align="center">57.9</td>
        <td width="10%" align="center">+7</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Mubarak ISMAIL</td>
        <td width="12%" align="center">1300</td>
        <td width="10%" align="center">15.4</td>
        <td width="10%" align="center">+15</td>
  </tr>
  <tr>
        <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#CC0000">Trade 
          Unionist and Socialist Coalition</td>
        <td align="center">Maxine BOWLER</td>
        <td align="center">865</td>
        <td align="center">10.2</td>
        <td align="center">-13</td>
  </tr>
 
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          Hold Majority</strong></td>
        <td width="12%" align="center">3592</td>
        <td width="10%" align="center">42.5</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>


        <td width="12%" align="center">8448</td>
    <td width="10%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Central Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">June Beryl 
          LEDBURY</td>
        <td height="17" width="12%" align="center">793</td>
        <td height="17" width="10%" align="center">9.2</td>
        <td height="17" width="10%" align="center">+1</td>
  </tr>
  <tr>
	    <td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
          Party*</td>
        <td width="41%" align="center">Rob UNWIN</td>
        <td width="12%" align="center">2192</td>
        <td width="10%" align="center">25.4</td>
        <td width="10%" align="center">-15</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Mohammad MAROOF</td>
        <td width="12%" align="center">2879</td>
        <td width="10%" align="center">33.3</td>
        <td width="10%" align="center">-6</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Mohammad AZIM</td>
        <td width="12%" align="center">2775</td>
        <td width="10%" align="center">32.1</td>
        <td width="10%" align="center">+19</td>
  </tr>

  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          gain grom Green Party . Majority</strong></td>
        <td width="12%" align="center">104</td>
        <td width="10%" align="center">1.2</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8639</td>
        <td width="10%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Crookes Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Matt DIXON</td>
        <td height="17" width="12%" align="center">1708</td>
        <td height="17" width="10%" align="center">17.1</td>
        <td height="17" width="10%" align="center">-4</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Julian Rupert Crossland 
          BRIGGS</td>
        <td width="12%" align="center">1028</td>
        <td width="10%" align="center">10.3</td>
        <td width="10%" align="center">-4</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Geoff SMITH</td>
        <td width="12%" align="center">2063</td>
        <td width="10%" align="center">20.6</td>
        <td width="10%" align="center">+8</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Sylvia ANGINOTTI*</td>
        <td width="12%" align="center">5210</td>
        <td width="10%" align="center">52.1</td>
        <td width="10%" align="center">-1</td>
  </tr>

  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">3147</td>
        <td width="10%" align="center">31.4</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">10009</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Darnall Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Margaret 
          Elizabeth PIGOTT</td>
        <td height="17" width="12%" align="center">676</td>
        <td height="17" width="10%" align="center">8.1</td>
        <td height="17" width="10%" align="center">-2</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Julie Anne WHITE</td>
        <td width="12%" align="center">258</td>
        <td width="10%" align="center">3.1</td>
        <td width="10%" align="center">-2</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Mazher IQBAL*</td>
        <td width="12%" align="center">4179</td>
        <td width="10%" align="center">49.9</td>
        <td width="10%" align="center">+6</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Misbah Uz CHOWDHURY</td>
        <td width="12%" align="center">2390</td>
        <td width="10%" align="center">28.5</td>
        <td width="10%" align="center">-3</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Charlotte Elizabeth ARNOTT</td>
        <td align="center">880</td>
        <td align="center">10.5</td>
        <td align="center">-1</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">1789</td>
        <td width="10%" align="center">21.3</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8383</td>
        <td width="10%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Dore and Totley Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">David Alan 
          PINDER</td>
        <td height="17" width="12%" align="center">3447</td>
        <td height="17" width="10%" align="center">33.5</td>
        <td height="17" width="10%" align="center">-10</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFFFF">English 
          Democrat </td>
        <td align="center">Peter SMITH</td>
        <td align="center">417</td>
        <td align="center">4.0</td>
        <td align="center">+4</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Rita Louise WILCOCK</td>
        <td width="12%" align="center">326</td>
        <td width="10%" align="center">3.2</td>
        <td width="10%" align="center">+1</td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Basheer KHAN</td>
        <td width="12%" align="center">906</td>
        <td width="10%" align="center">8.8</td>
        <td width="10%" align="center">+5</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Keith Leonard HILL*</td>
        <td width="12%" align="center">5207</td>
        <td width="10%" align="center">50.5</td>
        <td width="10%" align="center">+2</td>
  </tr>
 
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">1760</td>
        <td width="10%" align="center">17.1</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">10303</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">East Ecclesfield Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Leanne KEEN</td>
        <td height="17" align="center">892</td>
        <td height="17" align="center">9.6</td>
        <td height="17" align="center">-3</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Russell 
          Scott MARSH-SMITH</td>
        <td height="17" width="12%" align="center">1288</td>
        <td height="17" width="10%" align="center">13.8</td>
        <td height="17" width="10%" align="center">+3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Mia SAFIR</td>
        <td width="12%" align="center">206</td>
        <td width="10%" align="center">2.2</td>
        <td width="10%" align="center">-1</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Garry David WEATHERALL*</td>
        <td width="12%" align="center">3500</td>
        <td width="10%" align="center">37.5</td>
        <td width="10%" align="center">+8</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Howard Banner HOUSE</td>
        <td width="12%" align="center">3450</td>
        <td width="10%" align="center">37.0</td>
        <td width="10%" align="center">-6</td>
  </tr>

  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          gain from Lib Dems Majority</strong></td>
        <td width="12%" align="center">50</td>
        <td width="10%" align="center">0.5</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9336</td>
    <td width="10%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Ecclesall Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Daniel RIDDINGTON-YOUNG</td>
        <td height="17" width="12%" align="center">2050</td>
        <td height="17" width="10%" align="center">18.8</td>
        <td height="17" width="10%" align="center">-5</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Arun MATHUR</td>
        <td width="12%" align="center">815</td>
        <td width="10%" align="center">7.5</td>
        <td width="10%" align="center">-1</td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Mohammad NAZIR</td>
        <td width="12%" align="center">1434</td>
        <td width="10%" align="center">13.2</td>
        <td width="10%" align="center">+5</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Roger DAVISON*</td>
        <td width="12%" align="center">6280</td>
        <td width="10%" align="center">57.7</td>
        <td width="10%" align="center">0</td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Jason Christopher SULLIVAN</td>
        <td align="center">300</td>
        <td align="center">2.8</td>
        <td align="center">+3</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">4230</td>
        <td width="10%" align="center">38.9</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">10879</td>
    <td width="10%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Firth Park Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Jordan Michael PONT</td>
        <td height="17" align="center">866</td>
        <td height="17" align="center">12.4</td>
        <td height="17" align="center">-7</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Martin John 
          BRANNAN</td>
        <td height="17" width="12%" align="center">794</td>
        <td height="17" width="10%" align="center">11.4</td>
        <td height="17" width="10%" align="center">+1</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Leela SIMMS</td>
        <td width="12%" align="center">236</td>
        <td width="10%" align="center">3.4</td>
        <td width="10%" align="center">-4</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Alan LAW*</td>
        <td width="12%" align="center">3978</td>
        <td width="10%" align="center">57.1</td>
        <td width="10%" align="center">+9</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Mansha KHAN</td>
        <td width="12%" align="center">1094</td>
        <td width="10%" align="center">15.7</td>
        <td width="10%" align="center">+2</td>
  </tr>
 
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">2884</td>
        <td width="10%" align="center">41.4</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">6968</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Fulwood Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Alan RYDER</td>
        <td height="17" width="12%" align="center">2270</td>
        <td height="17" width="10%" align="center">23.8</td>
        <td height="17" width="10%" align="center">-3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Judith RUTNAM</td>
        <td width="12%" align="center">638</td>
        <td width="10%" align="center">6.7</td>
        <td width="10%" align="center">0</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Tim JEFFREY</td>
        <td width="12%" align="center">1196</td>
        <td width="10%" align="center">12.5</td>
        <td width="10%" align="center">+5</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Janice Margaret SIDEBOTTOM*</td>
        <td width="12%" align="center">5217</td>
        <td width="10%" align="center">54.7</td>
        <td width="10%" align="center">0</td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Nigel Terence JAMES</td>
        <td align="center">225</td>
        <td align="center">2.4</td>
        <td align="center">-1</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">2947</td>
        <td width="10%" align="center">30.9</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9546</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Gleadless Valley Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Jenny GRANT</td>
        <td height="17" width="12%" align="center">732</td>
        <td height="17" width="10%" align="center">8.8</td>
        <td height="17" width="10%" align="center">+1</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Gareth Edward John ROBERTS</td>
        <td width="12%" align="center">847</td>
        <td width="10%" align="center">10.1</td>
        <td width="10%" align="center">-5</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFFFF">Independent</td>
        <td align="center">Bina MISTRY</td>
        <td align="center">116</td>
        <td align="center">1.4</td>
        <td align="center">+1</td>
  </tr>
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Cate MCDONALD</td>
        <td width="12%" align="center">3394</td>
        <td width="10%" align="center">40.6</td>
        <td width="10%" align="center">+6</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Andy HINMAN</td>
        <td width="12%" align="center">2795</td>
        <td width="10%" align="center">33.4</td>
        <td width="10%" align="center">-9</td>
  </tr>
  <tr>
        <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#CC0000">Socialist 
          Alternative </td>
        <td align="center">Michael Barry BARTHOLOMEW</td>
        <td align="center">84</td>
        <td align="center">1.0</td>
        <td align="center">+1</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Jennifer Marie RUCHAT</td>
        <td align="center">394</td>
        <td align="center">4.7</td>
        <td align="center">+5</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">599</td>
        <td width="10%" align="center">7.2</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8362</td>
        <td width="10%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Graves Park Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Trevor GRANT</td>
        <td height="17" width="12%" align="center">1643</td>
        <td height="17" width="10%" align="center">17.7</td>
        <td height="17" width="10%" align="center">+1</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">David Maurice HAYES</td>
        <td width="12%" align="center">383</td>
        <td width="10%" align="center">4.1</td>
        <td width="10%" align="center">-2</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFFFF">Independent</td>
        <td align="center">Marie Anne BUSFIELD</td>
        <td align="center">27</td>
        <td align="center">0.3</td>
        <td align="center">0</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Bob PEMBERTON</td>
        <td width="12%" align="center">2824</td>
        <td width="10%" align="center">30.4</td>
        <td width="10%" align="center">+9</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Bob MCCANN*</td>
        <td width="12%" align="center">4080</td>
        <td width="10%" align="center">43.9</td>
        <td width="10%" align="center">-3</td>
  </tr>
  <tr>
        <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#CC0000">Socialist 
          Alternative </td>
        <td align="center">Alan Thornton MUNRO</td>
        <td align="center">44</td>
        <td align="center">0.5</td>
        <td align="center">+1</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Pauline Elizabeth ARNOTT</td>
        <td align="center">289</td>
        <td align="center">3.1</td>
        <td align="center">-1</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9290</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Hillsborough Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Tracey SMITH</td>
        <td height="17" align="center">647</td>
        <td height="17" align="center">7.2</td>
        <td height="17" align="center">-2</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Paul Anthony 
          WALLACE</td>
        <td height="17" width="12%" align="center">1000</td>
        <td height="17" width="10%" align="center">11.1</td>
        <td height="17" width="10%" align="center">+6</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Chris MCMAHON</td>
        <td width="12%" align="center">435</td>
        <td width="10%" align="center">4.8</td>
        <td width="10%" align="center">-1</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Janet Pleasance BRAGG*</td>
        <td width="12%" align="center">3840</td>
        <td width="10%" align="center">42.6</td>
        <td width="10%" align="center">+13</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Karen SOUTHWOOD</td>
        <td width="12%" align="center">3452</td>
        <td width="10%" align="center">38.2</td>
        <td width="10%" align="center">-12</td>
  </tr>

  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
    <td width="12%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9014</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Manor Castle Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Benjamin Francis THOMAS</td>
        <td height="17" align="center">465</td>
        <td height="17" align="center">7.6</td>
        <td height="17" align="center">+8</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Christina 
          Alison STARK</td>
        <td height="17" width="12%" align="center">438</td>
        <td height="17" width="10%" align="center">7.2</td>
        <td height="17" width="10%" align="center">-6</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Graham Stephen WROE</td>
        <td width="12%" align="center">360</td>
        <td width="10%" align="center">5.9</td>
        <td width="10%" align="center">-6</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Jan WILSON*</td>
        <td width="12%" align="center">3371</td>
        <td width="10%" align="center">55.4</td>
        <td width="10%" align="center">+2</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Dave CROFT</td>
        <td width="12%" align="center">1552</td>
        <td width="10%" align="center">25.5</td>
        <td width="10%" align="center">+4</td>
  </tr>
 
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">1819</td>
        <td width="10%" align="center">29.9</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">6086</td>
        <td width="10%" align="center">&nbsp;</td>    <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Mosborough Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Terence William CRAINE</td>
        <td height="17" align="center">473</td>
        <td height="17" align="center">5.4</td>
        <td height="17" align="center">+5</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Eve MILLWARD</td>
        <td height="17" width="12%" align="center">1506</td>
        <td height="17" width="10%" align="center">17.3</td>
        <td height="17" width="10%" align="center">+3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Anwen FRYER</td>
        <td width="12%" align="center">126</td>
        <td width="10%" align="center">1.4</td>
        <td width="10%" align="center">-2</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Isobel Mary Wilson BOWLER</td>
        <td width="12%" align="center">3270</td>
        <td width="10%" align="center">37.6</td>
        <td width="10%" align="center">+3</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Elaine HINMAN</td>
        <td width="12%" align="center">3013</td>
        <td width="10%" align="center">34.6</td>
        <td width="10%" align="center">-14</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center"><br />
          Les ARNOTT<br />
        </td>
        <td align="center">307</td>
        <td align="center">3.5</td>
        <td align="center">+4</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          gain from Lib Dems Majority</strong></td>
        <td width="12%" align="center">257</td>
        <td width="10%" align="center">3.0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">8695</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Nether Edge Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Rosita Beryl 
          MALANDRINOS</td>
        <td height="17" width="12%" align="center">793</td>
        <td height="17" width="10%" align="center">8.2</td>
        <td height="17" width="10%" align="center">+2</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Gemma LOCK</td>
        <td width="12%" align="center">1042</td>
        <td width="10%" align="center">10.8</td>
        <td width="10%" align="center">-2</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Tim RIPPON*</td>
        <td width="12%" align="center">3075</td>
        <td width="10%" align="center">31.9</td>
        <td width="10%" align="center">-4</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Anders Paul HANSON</td>
        <td width="12%" align="center">4545</td>
        <td width="10%" align="center">47.2</td>
        <td width="10%" align="center">+2</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Jeffrey Stephen SHAW</td>
        <td align="center">172</td>
        <td align="center">1.8</td>
        <td align="center">+2</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
    <td width="12%" align="center">0</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9627</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Richmond Ward</h1>
                </td>
  </tr>
    <tr>
<td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Christopher Neil HARTIGAN</td>
        <td height="17" align="center">649</td>
        <td height="17" align="center">8.8</td>
        <td height="17" align="center">+9</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Ian FEY</td>
        <td height="17" width="12%" align="center">907</td>
        <td height="17" width="10%" align="center">12.3</td>
        <td height="17" width="10%" align="center">-3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Richard Anthony ROPER</td>
        <td width="12%" align="center">158</td>
        <td width="10%" align="center">2.1</td>
        <td width="10%" align="center">-4</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Martin LAWTON*</td>
        <td width="12%" align="center">3620</td>
        <td width="10%" align="center">49.1</td>
        <td width="10%" align="center">+4</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Genna HOWELLS</td>
        <td width="12%" align="center">1631</td>
        <td width="10%" align="center">22.1</td>
        <td width="10%" align="center">+3</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">David John ASHER</td>
        <td align="center">402</td>
        <td align="center">5.5</td>
        <td align="center">-8</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">1989</td>
        <td width="10%" align="center">27.0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">7367</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Shiregreen and Brightside Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Brian THWAITES</td>
        <td height="17" align="center">987</td>
        <td height="17" align="center">13.5</td>
        <td height="17" align="center">-7</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Eric KIRBY</td>
        <td height="17" width="12%" align="center">799</td>
        <td height="17" width="10%" align="center">11.0</td>
        <td height="17" width="10%" align="center">0</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Steve Michael BRADY</td>
        <td width="12%" align="center">203</td>
        <td width="10%" align="center">2.8</td>
        <td width="10%" align="center">-3</td>
  </tr>
 
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Peter RIPPON*</td>
        <td width="12%" align="center">3607</td>
        <td width="10%" align="center">49.6</td>
        <td width="10%" align="center">+3</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Jim TOSSEANO</td>
        <td width="12%" align="center">1275</td>
        <td width="10%" align="center">17.5</td>
        <td width="10%" align="center">+9</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Scott Andrew WRIGHT</td>
        <td align="center">401</td>
        <td align="center">5.5</td>
        <td align="center">+5</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">2332</td>
        <td width="10%" align="center">32.0</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">7272</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Southey Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">John SHELDON</td>
        <td height="17" align="center">990</td>
        <td height="17" align="center">14.2</td>
        <td height="17" align="center">-12</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Jill HALLAM</td>
        <td height="17" width="12%" align="center">775</td>
        <td height="17" width="10%" align="center">11.1</td>
        <td height="17" width="10%" align="center">0</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Eamonn Charles WARD</td>
        <td width="12%" align="center">194</td>
        <td width="10%" align="center">2.8</td>
        <td width="10%" align="center">-1</td>
  </tr>

  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Gillian FURNISS*</td>
        <td width="12%" align="center">3676</td>
        <td width="10%" align="center">52.8</td>
        <td width="10%" align="center">+11</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Chris TOSSEANO</td>
        <td width="12%" align="center">1329</td>
        <td width="10%" align="center">19.1</td>
        <td width="10%" align="center">+1</td>
  </tr>

  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">2347</td>
        <td width="10%" align="center">33.7</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">6964</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Stannington Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
  <tr>
                <td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#000099"  height="18">BNP</td>
        <td height="17" align="center">Malcolm Thomas WOODHEAD</td>
        <td height="17" align="center">641</td>
        <td height="17" align="center">6.5</td>
        <td height="17" align="center">+7</td>
  </tr>
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Andrew John 
          WATSON</td>
        <td height="17" width="12%" align="center">1756</td>
        <td height="17" width="10%" align="center">17.8</td>
        <td height="17" width="10%" align="center">+1</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Martin Keith BRADSHAW</td>
        <td width="12%" align="center">552</td>
        <td width="10%" align="center">5.6</td>
        <td width="10%" align="center">-1</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Qurban HUSSAIN</td>
        <td width="12%" align="center">2286</td>
        <td width="10%" align="center">23.2</td>
        <td width="10%" align="center">-2</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">David BAKER*</td>
        <td width="12%" align="center">4620</td>
        <td width="10%" align="center">46.9</td>
        <td width="10%" align="center">-5</td>
  </tr>
 
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">2334</td>
        <td width="10%" align="center">23.7</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9855</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Stocksbridge and Upper Don Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Hilary Ann 
          GAY</td>
        <td height="17" width="12%" align="center">1972</td>
        <td height="17" width="10%" align="center">20.2</td>
        <td height="17" width="10%" align="center">+3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Dan LYONS</td>
        <td width="12%" align="center">290</td>
        <td width="10%" align="center">3.0</td>
        <td width="10%" align="center">-2</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Philip WOOD</td>
        <td width="12%" align="center">2657</td>
        <td width="10%" align="center">27.3</td>
        <td width="10%" align="center">+15</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Alison Elaine BRELSFORD*</td>
        <td width="12%" align="center">3360</td>
        <td width="10%" align="center">34.4</td>
        <td width="10%" align="center">-2</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Grant FRENCH</td>
        <td align="center">1466</td>
        <td align="center">15.0</td>
        <td align="center">+15</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">703</td>
        <td width="10%" align="center">7.2</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>

        <td width="12%" align="center">9745</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Walkley Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">George Roy 
          LEDBURY</td>
        <td height="17" width="12%" align="center">747</td>
        <td height="17" width="10%" align="center">8.1</td>
        <td height="17" width="10%" align="center">+3</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Jim WILSON</td>
        <td width="12%" align="center">794</td>
        <td width="10%" align="center">8.7</td>
        <td width="10%" align="center">-1</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Catherine Anne WALSH</td>
        <td width="12%" align="center">3470</td>
        <td width="10%" align="center">37.8</td>
        <td width="10%" align="center">+3</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Ben CURRAN</td>
        <td width="12%" align="center">3760</td>
        <td width="10%" align="center">41.0</td>
        <td width="10%" align="center">-9</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Richard John RATCLIFFE</td>
        <td align="center">405</td>
        <td align="center">4.4</td>
        <td align="center">+4</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">290</td>
        <td width="10%" align="center">3.2</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9176</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
 
 
           
<table width="100%" cellpadding="0" border="1">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">West Ecclesfield Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Tim LEWIS</td>
        <td height="17" width="12%" align="center">1680</td>
        <td height="17" width="10%" align="center">18.1</td>
        <td height="17" width="10%" align="center">+8</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">Kathy ASTON</td>
        <td width="12%" align="center">375</td>
        <td width="10%" align="center">4.0</td>
        <td width="10%" align="center">0</td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour</td>
        <td width="41%" align="center">Alf MEADE</td>
        <td width="12%" align="center">3211</td>
        <td width="10%" align="center">34.5</td>
        <td width="10%" align="center">+14</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
          Democrats*</td>
        <td width="41%" align="center">Trevor BAGSHAW*</td>
        <td width="12%" align="center">4034</td>
        <td width="10%" align="center">43.4</td>
        <td width="10%" align="center">-9</td>
  </tr>

  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Lib 
          Dem hold Majority</strong></td>
        <td width="12%" align="center">823</td>
        <td width="10%" align="center">8.8</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">9300</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>
<br />
  

           
<table width="100%" cellpadding="0">
  <tr bgcolor="#FFFFCC"> 
                <td align="center" colspan="8">
                  <h1 style="color: #000000">Woodhouse Ward</h1>
                </td>
  </tr>
  <tr>
    <td width="28%"><strong>Party </strong></td>
    <td align="center" width="41%" height="2"><strong>Candidate</strong></td>
    <td align="center" width="12%" height="2"><strong>Votes</strong></td>
    <td align="center" width="10%" height="2"><strong>%</strong></td>
    <td align="center" width="10%" height="2"><strong>&plusmn;%</strong></td>
  </tr>
 
  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
        <td height="17" width="41%" align="center">Laurence 
          George Eyes HAYWARD</td>
        <td height="17" width="12%" align="center">1118</td>
        <td height="17" width="10%" align="center">14.5</td>
        <td height="17" width="10%" align="center">-1</td>
  </tr>
  <tr>
	<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green 
        Party</td>
        <td width="41%" align="center">John Francis GRANT</td>
        <td width="12%" align="center">210</td>
        <td width="10%" align="center">2.7</td>
        <td width="10%" align="center">-4</td>
  </tr>
  <tr>
        <td style="font-weight: bold;"  width="27%" bgcolor="#FFFFFF">English 
          Democrat </td>
        <td align="center">Derek Anthony HUTCHINSON</td>
        <td align="center">331</td>
        <td align="center">4.3</td>
        <td align="center">+4</td>
  </tr>
  <tr>
        <td style="color: #ffffff; font-weight: bold;" bgcolor="#ff0000"  width="28%">Labour*</td>
        <td width="41%" align="center">Raymond Michael SATUR*</td>
        <td width="12%" align="center">3633</td>
        <td width="10%" align="center">47.0</td>
        <td width="10%" align="center">-1</td>
  </tr>
  <tr>
    <td style="font-weight: bold;"  width="27%" bgcolor="#FFFF00">Liberal 
        Democrats</td>
        <td width="41%" align="center">Christopher Andrew BINGHAM</td>
        <td width="12%" align="center">1693</td>
        <td width="10%" align="center">21.9</td>
        <td width="10%" align="center">+7</td>
  </tr>

  <tr>
    <td style="color: #ffffff; font-weight: bold;"  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
        <td align="center">Jonathan William ARNOTT</td>
        <td align="center">739</td>
        <td align="center">9.6</td>
        <td align="center">-4</td>
  </tr>
  <tr>
        <td align="right" bgcolor="#ffffcc" colspan="2"><strong>Labour 
          hold Majority</strong></td>
        <td width="12%" align="center">1940</td>
        <td width="10%" align="center">25.1</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  align="right" bgcolor="#ffffcc" colspan="2"><strong>Turnout</strong></td>
        <td width="12%" align="center">7724</td>
        <td width="10%" align="center">&nbsp;</td>
        <td width="10%" align="center">&nbsp;</td>
  </tr>
</table>

</div>

<?php endwhile; endif; ?>

</div>

			</div><!-- #post -->
            
            <div id="sidebar">
            	<?php get_sidebar(); ?>
            </div><!-- #sidebar -->

		</div><!-- #container -->
</div>
</div>
<?php get_footer(); ?>
</body>
</html>