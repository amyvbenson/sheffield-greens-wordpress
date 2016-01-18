<?php
/*
Template Name: General Election results 2008
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

<table border="1" cellpadding="0" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">Brightside and Hillsborough - (*) compared to former Brightside constituency</h1>
</td>
</tr>
<tr>
<td width="28%"><strong>Party </strong></td>
<td width="41%" height="2" align="center"><strong>Candidate</strong></td>
<td width="12%" height="2" align="center"><strong>Votes</strong></td>
<td width="10%" height="2" align="center"><strong>%</strong></td>
<td width="10%" height="2" align="center"><strong>&plusmn;%(*)</strong></td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="18" bgcolor="#000099">BNP</td>
<td height="17" align="center">John SHELDON</td>
<td height="17" align="center">3026</td>
<td height="17" align="center">8</td>
<td height="17" align="center">+1.8</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="41%" height="17" align="center">John SHARP</td>
<td width="12%" height="17" align="center">4458</td>
<td width="10%" height="17" align="center">11</td>
<td width="10%" height="17" align="center">+2</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#9900cc">UK Independence</td>
<td width="41%" align="center">Pat Sullivan</td>
<td width="12%" align="center">1659</td>
<td width="10%" align="center">4</td>
<td width="10%" align="center">+0.8</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#ff0000">Labour*</td>
<td width="41%" align="center">David BLUNKETT</td>
<td width="12%" align="center">21400</td>
<td width="10%" align="center">55</td>
<td width="10%" align="center">-13.5</td>
</tr>
<tr>
<td style="font-weight: bold;" width="27%" bgcolor="#ffff00">Liberal Democrats</td>
<td width="41%" align="center">Jonathan HARSTON</td>
<td width="12%" align="center">7768</td>
<td width="10%" align="center">20</td>
<td width="10%" align="center">+15.7</td>
</tr>
<tr>
<td style="font-weight: bold; color: #ffffff;" bgcolor="#cc0000">Trade Unionist and Socialist Coalition</td>
<td align="center">Maxine Bowler</td>
<td align="center">656</td>
<td align="center">2</td>
<td align="center">+2</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Majority</strong></td>
<td width="12%" align="center">0</td>
<td width="10%" align="center">0</td>
<td width="10%" align="center">0</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Turnout</strong></td>
<td width="12%" align="center">0</td>
<td width="10%" align="center">0</td>
<td width="10%" align="center">0</td>
</tr>
</tbody>
</table>
<br />
<table border="1" cellpadding="0" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">Central - (*) compared
to old Central constituency that included Burngreave but not Broomhill
and Walkley</h1>
</td>
</tr>
<tr>
<td width="28%"><strong>Party </strong></td>
<td width="41%" height="2" align="center"><strong>Candidate</strong></td>
<td width="12%" height="2" align="center"><strong>Votes</strong></td>
<td width="10%" height="2" align="center"><strong>%</strong></td>
<td width="10%" height="2" align="center"><strong>&plusmn;%(*)</strong></td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="41%" height="17" align="center">Andrew LEE</td>
<td width="12%" height="17" align="center">4206</td>
<td width="10%" height="17" align="center">10.1</td>
<td width="10%" height="17" align="center">-0.2</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green
Party</td>
<td width="41%" align="center">Jillian CREASY</td>
<td width="12%" align="center">1556</td>
<td width="10%" align="center">3.8</td>
<td width="10%" align="center">-2.2</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#ff0000">Labour*</td>
<td width="41%" align="center">Paul BLOMFIELD</td>
<td width="12%" align="center">17138</td>
<td width="10%" align="center">41.3</td>
<td width="10%" align="center">-8.6</td>
</tr>
<tr>
<td style="font-weight: bold;" width="27%" bgcolor="#ffff00">Liberal
Democrats</td>
<td width="41%" align="center">Paul SCRIVEN</td>
<td width="12%" align="center">16973</td>
<td width="10%" align="center">40.9</td>
<td width="10%" align="center">+12.6</td>
</tr>
<tr>
<td style="color: #000000; font-weight: bold;" width="27%" bgcolor="#ffffff">Independent</td>
<td align="center">Rod RODGERS</td>
<td align="center">40</td>
<td align="center">0.1</td>
<td align="center">+0.1</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" bgcolor="#9900cc">UK
Independence</td>
<td align="center">Jeffrey SHAW</td>
<td align="center">652</td>
<td align="center">1.6</td>
<td align="center">+0.2</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" bgcolor="#000099">BNP</td>
<td align="center">Tracey SMITH</td>
<td align="center">903</td>
<td align="center">2.2</td>
<td align="center">+2.2</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Majority</strong></td>
<td width="12%" align="center">0</td>
<td width="10%" align="center">0</td>
<td width="10%" align="center">0</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Turnout</strong></td>
<td width="12%" align="center">0</td>
<td width="10%" align="center">0</td>
<td width="10%" align="center">0</td>
</tr>
</tbody>
</table>
<br />
<table border="1" cellpadding="0" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">Hallam</h1>
</td>
</tr>
<tr>
<td width="28%"><strong>Party </strong></td>
<td width="41%" height="2" align="center"><strong>Candidate</strong></td>
<td width="12%" height="2" align="center"><strong>Votes</strong></td>
<td width="10%" height="2" align="center"><strong>%</strong></td>
<td width="10%" height="2" align="center"><strong>&plusmn;%</strong></td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="41%" height="17" align="center">Nicola BATES</td>
<td width="12%" height="17" align="center">12040</td>
<td width="10%" height="17" align="center">23.5</td>
<td width="10%" height="17" align="center">-6.3</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#669900">Green
Party</td>
<td width="41%" align="center">Steve BARNARD</td>
<td width="12%" align="center">919</td>
<td width="10%" align="center">1.8</td>
<td width="10%" align="center">-1.5</td>
</tr>
<tr>
<td style="font-weight: bold;" width="27%" bgcolor="#ffffff">Independent</td>
<td align="center">Martin FITZPATRICK</td>
<td align="center">429</td>
<td align="center">0.8</td>
<td align="center">+0.8</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#ff0000">Labour</td>
<td width="41%" align="center">Jack SCOTT</td>
<td width="12%" align="center">8228</td>
<td width="10%" align="center">16.1</td>
<td width="10%" align="center">+3.5</td>
</tr>
<tr>
<td style="font-weight: bold;" width="27%" bgcolor="#ffff00">Liberal
Democrats*</td>
<td width="41%" align="center">Nick CLEGG</td>
<td width="12%" align="center">27324</td>
<td width="10%" align="center">53.4</td>
<td width="10%" align="center">+2.2</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#cc0000">English Democrats</td>
<td align="center">David WILDGOOSE</td>
<td align="center">586</td>
<td align="center">1.1</td>
<td align="center">+1.1</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="2" bgcolor="#9900cc">UK
Independence</td>
<td align="center">Nigel JAMES</td>
<td align="center">1195</td>
<td align="center">2.3</td>
<td align="center">+1.2</td>
</tr>
<tr>
<td style="color: #000000; font-weight: bold;" height="2" bgcolor="#cccccc">Christian Party</td>
<td align="center">Ray GREEN</td>
<td align="center">250</td>
<td align="center">0.5</td>
<td align="center">-0.6</td>
</tr>
<tr>
<td style="color: #000000; font-weight: bold;" height="2" bgcolor="#cccccc">Monster Raving Loony Party</td>
<td align="center">Mark ADSHEAD</td>
<td align="center">164</td>
<td align="center">0.3</td>
<td align="center">0</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Majority</strong></td>
<td width="12%" align="center">15284</td>
<td width="10%" align="center">29.9%</td>
<td width="10%" align="center"> </td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Turnout</strong></td>
<td width="12%" align="center"> </td>
<td width="10%" align="center"> </td>
<td width="10%" align="center"> </td>
</tr>
</tbody>
</table>
<br />
<table border="1" cellpadding="0" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">Heeley</h1>
</td>
</tr>
<tr>
<td width="28%"><strong>Party </strong></td>
<td width="41%" height="2" align="center"><strong>Candidate</strong></td>
<td width="12%" height="2" align="center"><strong>Votes</strong></td>
<td width="10%" height="2" align="center"><strong>%</strong></td>
<td width="10%" height="2" align="center"><strong>&plusmn;%</strong></td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="41%" height="17" align="center">Anne CROMPTON</td>
<td width="12%" height="17" align="center">7081</td>
<td width="10%" height="17" align="center">17.3</td>
<td width="10%" height="17" align="center">+2.7</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#669900">Green
Party</td>
<td width="41%" align="center">Gareth ROBERTS</td>
<td width="12%" align="center">989</td>
<td width="10%" align="center">2.4</td>
<td width="10%" align="center">-1.5</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#ff0000">Labour*</td>
<td width="41%" align="center">Meg MUNN</td>
<td width="12%" align="center">17409</td>
<td width="10%" align="center">42.6</td>
<td width="10%" align="center">-11.4</td>
</tr>
<tr>
<td style="font-weight: bold;" width="28%" bgcolor="#ffff00">Liberal
Democrats</td>
<td width="41%" align="center">Simon CLEMENT-JONES</td>
<td width="12%" align="center">11602</td>
<td width="10%" align="center">28.4</td>
<td width="10%" align="center">+7.8</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" height="2" bgcolor="#9900cc">UK
Independence</td>
<td align="center">Charlotte ARNOTT</td>
<td align="center">1530</td>
<td align="center">3.7</td>
<td align="center">+1.4</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" height="2" bgcolor="#000099">BNP</td>
<td align="center">John BEATSON</td>
<td align="center">2260</td>
<td align="center">5.5</td>
<td align="center">+1.6</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Majority</strong></td>
<td width="12%" align="center">5807</td>
<td width="10%" align="center">14.2</td>
<td width="10%" align="center"> </td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Turnout</strong></td>
<td width="12%" align="center"> </td>
<td width="10%" align="center">62.6</td>
<td width="10%" align="center"> </td>
</tr>
</tbody>
</table>
<br />
<table border="1" cellpadding="0" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">Penistone and Stocksbridge</h1>
</td>
</tr>
<tr>
<td width="28%"><strong>Party </strong></td>
<td width="41%" height="2" align="center"><strong>Candidate</strong></td>
<td width="12%" height="2" align="center"><strong>Votes</strong></td>
<td width="10%" height="2" align="center"><strong>%</strong></td>
<td width="10%" height="2" align="center">%+/-</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="41%" height="17" align="center">Spencer
PITFIELD</td>
<td width="12%" height="17" align="center">14516</td>
<td width="10%" height="17" align="center">31.2</td>
<td width="10%" height="17" align="center">+7.5</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#000000">English
Democrats</td>
<td width="41%" align="center">Paul McEnhill</td>
<td width="12%" align="center">492</td>
<td width="10%" align="center">1.1</td>
<td width="10%" align="center">+1.1</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#ff0000">Labour*</td>
<td width="41%" align="center">Angela SMITH</td>
<td width="12%" align="center">17565</td>
<td width="10%" align="center">37.8</td>
<td width="10%" align="center">-7.4</td>
</tr>
<tr>
<td style="font-weight: bold;" width="28%" bgcolor="#ffff00">Liberal
Democrats</td>
<td width="41%" align="center">Ian CUTHBERTSON</td>
<td width="12%" align="center">9800</td>
<td width="10%" align="center">21.1</td>
<td width="10%" align="center">-3.7</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" height="2" bgcolor="#9900cc">UK
Independence</td>
<td align="center">Grant FRENCH</td>
<td align="center">1936</td>
<td align="center">4.2</td>
<td align="center">+2.5</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" height="2" bgcolor="#000099">BNP</td>
<td align="center">Paul JAMES</td>
<td align="center">2207</td>
<td align="center">4.7</td>
<td align="center">0</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Majority</strong></td>
<td width="12%" align="center">3049</td>
<td width="10%" align="center">6.6</td>
<td width="10%" align="center"> </td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Turnout</strong></td>
<td width="12%" align="center"> </td>
<td width="10%" align="center"> </td>
<td width="10%" align="center"> </td>
</tr>
</tbody>
</table>
<br />
<table border="1" cellpadding="0" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">South East</h1>
</td>
</tr>
<tr>
<td width="28%"><strong>Party </strong></td>
<td width="41%" height="2" align="center"><strong>Candidate</strong></td>
<td width="12%" height="2" align="center"><strong>Votes</strong></td>
<td width="10%" height="2" align="center"><strong>%</strong></td>
<td width="10%" height="2" align="center"><strong>&plusmn;%</strong></td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="18" bgcolor="#000099">BNP</td>
<td height="17" align="center">Christopher HARTIGAN</td>
<td height="17" align="center">2345</td>
<td height="17" align="center">5.7</td>
<td height="17" align="center">+1.6</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="41%" height="17" align="center">Nigel BONSON</td>
<td width="12%" height="17" align="center">7202</td>
<td width="10%" height="17" align="center">17.4</td>
<td width="10%" height="17" align="center">+3</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="27%" bgcolor="#9900cc">UK Independence</td>
<td width="41%" align="center">Jonathan ARNOTT</td>
<td width="12%" align="center">1889</td>
<td width="10%" align="center">4.6</td>
<td width="10%" align="center">+0.2</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="28%" bgcolor="#ff0000">Labour*</td>
<td width="41%" align="center">Clive BETTS</td>
<td width="12%" align="center">20169</td>
<td width="10%" align="center">48.7</td>
<td width="10%" align="center">-11.6</td>
</tr>
<tr>
<td style="font-weight: bold;" width="27%" bgcolor="#ffff00">Liberal
Democrats</td>
<td width="41%" align="center">Gail SMITH</td>
<td width="12%" align="center">9664</td>
<td width="10%" align="center">23.3</td>
<td width="10%" align="center">+6.4</td>
</tr>
<tr>
<td style="font-weight: bold; color: #ffffff;" bgcolor="#cc0000">Communist Party of Britain</td>
<td align="center">Steven ANDREW</td>
<td align="center">139</td>
<td align="center">0.3</td>
<td align="center">+0.3</td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Majority</strong></td>
<td width="12%" align="center">0</td>
<td width="10%" align="center">0</td>
<td width="10%" align="center"> </td>
</tr>
<tr>
<td colspan="2" align="right" bgcolor="#ffffcc"><strong>Turnout</strong></td>
<td width="12%" align="center">0</td>
<td width="10%" align="center">0</td>
<td width="10%" align="center"> </td>
</tr>
</tbody>
</table>
<br />
<table border="1" width="100%">
<tbody>
<tr bgcolor="#ffffcc">
<td colspan="8" align="center">
<h1 style="color: #000000;">Sheffield General Election Result 2010 Overall</h1>
</td>
</tr>
<tr align="left" valign="top">
<td width="25%"><strong>Party </strong></td>
<td width="9%" align="center"><strong>Seats</strong></td>
<td width="9%" align="center"><strong>Gains</strong></td>
<td width="11%" align="center"><strong>Net Gain &amp; Loss</strong></td>
<td width="9%" align="center"><strong>Seats % </strong></td>
<td width="9%" align="center"><strong>Votes</strong></td>
<td width="9%" align="center"><strong>% </strong></td>
<td width="19%" align="center">Votes per MP</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="25%" height="18" bgcolor="#000099">BNP</td>
<td width="9%" height="18" align="center">0</td>
<td width="9%" height="18" align="center">0</td>
<td width="11%" height="18" align="center">0</td>
<td width="9%" height="18" align="center">0</td>
<td width="9%" height="18" align="center">10741</td>
<td width="9%" height="18" align="center">4.1</td>
<td width="19%" height="18" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="25%" height="18" bgcolor="#0000ff">Conservative</td>
<td width="9%" height="18" align="center">0</td>
<td width="9%" height="18" align="center">0</td>
<td width="11%" height="18" align="center">0</td>
<td width="9%" height="18" align="center">0</td>
<td width="9%" height="18" align="center">52546</td>
<td width="9%" height="18" align="center">19.0</td>
<td width="19%" height="18" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="25%" bgcolor="#669900">Green
Party</td>
<td width="9%" align="center">0</td>
<td width="9%" align="center">0</td>
<td width="11%" align="center">0</td>
<td width="9%" align="center">0</td>
<td width="9%" align="center">3876</td>
<td width="9%" align="center">1.3</td>
<td width="19%" align="center"> </td>
</tr>
<tr>
<td style="font-weight: bold;" width="25%" bgcolor="#ffffff">Independent</td>
<td width="9%" align="center">0</td>
<td width="9%" align="center">0</td>
<td width="11%" align="center">0</td>
<td width="9%" align="center">0</td>
<td width="9%" align="center">429</td>
<td width="9%" align="center">0.2</td>
<td width="19%" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="25%" bgcolor="#ff0000">Labour</td>
<td width="9%" align="center">5</td>
<td width="9%" align="center">0</td>
<td width="11%" align="center">0</td>
<td width="9%" align="center">83.3</td>
<td width="9%" align="center">101909</td>
<td width="9%" align="center">39.1</td>
<td width="19%" align="center">20381</td>
</tr>
<tr>
<td style="font-weight: bold;" width="25%" bgcolor="#ffff00">Liberal
Democrats</td>
<td width="9%" align="center">1</td>
<td width="9%" align="center">0</td>
<td width="11%" align="center">0</td>
<td width="9%" align="center">16.6</td>
<td width="9%" align="center">76517</td>
<td width="9%" align="center">31.9</td>
<td width="19%" align="center">76517</td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="25%" bgcolor="#cc0000">Trade
Union and Socialist Coalition</td>
<td width="9%" align="center">0</td>
<td width="9%" align="center">0</td>
<td width="11%" align="center">0</td>
<td width="9%" align="center">0</td>
<td width="9%" align="center">656</td>
<td width="9%" align="center">0.3</td>
<td width="19%" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" width="25%" height="2" bgcolor="#9900cc">UK
Independence</td>
<td width="9%" height="2" align="center">0</td>
<td width="9%" height="2" align="center">0</td>
<td width="11%" height="2" align="center">0</td>
<td width="9%" height="2" align="center">0</td>
<td width="9%" height="2" align="center">8771</td>
<td width="9%" height="2" align="center">3.4</td>
<td width="19%" height="2" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" height="2" bgcolor="#cc0000">Communist
Party</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">139</td>
<td height="2" align="center">0.1</td>
<td height="2" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" height="2" bgcolor="#00cccc">Christian
Party</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">441</td>
<td height="2" align="center">0.2</td>
<td height="2" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" height="2" bgcolor="#ff66ff">Monster
Raving Loony</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">164</td>
<td height="2" align="center">0.1</td>
<td height="2" align="center"> </td>
</tr>
<tr>
<td style="color: #ffffff; font-weight: bold;" height="2" bgcolor="#6600ff">English
Democrats</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">0</td>
<td height="2" align="center">1570</td>
<td height="2" align="center">0.6</td>
<td height="2" align="center"> </td>
</tr>
<tr>
<td colspan="5" align="right"><strong>Turnout</strong></td>
<td width="9%" align="center">260958</td>
<td width="9%" align="center">100</td>
<td width="19%" align="center"> </td>
</tr>
</tbody>
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

<?php get_footer(); ?>