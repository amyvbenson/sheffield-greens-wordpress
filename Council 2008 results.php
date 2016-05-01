<?php
/*
Template Name: Council Election results 2008
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
              <tr bgcolor="#FFFFFF"> 
                <td colspan="8" >
                  <div align="center">Sheffield City Council Election Result 2008</div>
                </td>
              </tr>
              <tr align="left" valign="top"> 
                <td width="27%"> 
                  <div align="left"><b>Party </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>Seats</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>Gains</b></div>
                </td>
                <td width="12%"> 
                  <div align="center"><b>Net Gain &amp; Loss</b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>Seats % </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="12%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
             
              <tr> 
                <td  width="27%" bgcolor="#000099" height="18">BNP</td>
                <td width="10%" height="18">0</td>
                <td width="9%" height="18">0</td>
                <td width="12%" height="18">0</td>
                <td width="10%" height="18">0</td>
                <td width="10%" height="18">5489</td>
                <td width="10%" height="18">3.8</td>
                <td width="12%" height="18">+0.5</td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#0000FF" height="18">Conservative</td>
                <td width="10%" height="18">0</td>
                <td width="9%" height="18">0</td>
                <td width="12%" height="18">-1</td>
                <td width="10%" height="18">0</td>
                <td width="10%" height="18">22978</td>
                <td width="10%" height="18">16.2</td>
                <td width="12%" height="18">+1.7</td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#669900">Green 
                  Party</td>
                <td width="10%">3</td>
                <td width="9%">+1</td>
                <td width="12%">+1</td>
                <td width="10%">4</td>
                <td width="10%">12446</td>
                <td width="10%">8.8</td>
                <td width="12%">-0.8</td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFFFF">Independent</td>
                <td width="10%">0</td>
                <td width="9%">0</td>
                <td width="12%">-1</td>
                <td width="10%">0</td>
                <td width="10%">1799</td>
                <td width="10%">1.3</td>
                <td width="12%">+1.3</td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#FF0000">Labour</td>
                <td width="10%">36</td>
                <td width="9%">0</td>
                <td width="12%">-4</td>
                <td width="10%">43</td>
                <td width="10%">42298</td>
                <td width="10%">29.8</td>
                <td width="12%">-5.0</td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="10%">45</td>
                <td width="9%">+6</td>
                <td width="12%">+6</td>
                <td width="10%">53</td>
                <td width="10%">53000</td>
                <td width="10%">37.4</td>
                <td width="12%">+3.5</td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#CC0000">The 
                  Left Party(Respect)</td>
                <td width="10%">0</td>
                <td width="9%">0</td>
                <td width="12%">0</td>
                <td width="10%">0</td>
                <td width="10%">1089</td>
                <td width="10%">0.8</td>
                <td width="12%">-1.1</td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFFFF">Socialist 
                  Altern-</td>
                <td width="10%">0</td>
                <td width="9%">0</td>
                <td width="12%">0</td>
                <td width="10%">0</td>
                <td width="10%">0000</td>
                <td width="10%">0.1</td>
                <td width="12%">-0.1</td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#9900CC" height="2">UK 
                  Independence </td>
                <td width="10%" height="2">0</td>
                <td width="9%" height="2">0</td>
                <td width="12%" height="2">0</td>
                <td width="10%" height="2">0</td>
                <td width="10%" height="2">2470</td>
                <td width="10%" height="2">1.7</td>
                <td width="12%" height="2">-0.1</td>
              </tr>
              <tr> 
                <td colspan="5"> 
                  <div align="right"></div>
                </td>
                <td width="10%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="12%">&nbsp;</td>
              </tr>
              <tr> 
                <td colspan="5"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="10%">&nbsp;</td>
                <td width="10%">
                  <div align="center">36.8</div>
                </td>
                <td width="12%">+0.8</td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" > 
                  <div align="left">Arbourthorne 
                    - Ward Lab hold</div>
                </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF" height="17">Conservative</td>
                <td width="41%" height="17">Peter 
                  Smith </td>
                <td width="12%" height="17"> 
                  <div align="center">727</div>
                </td>
                <td width="9%" height="17"> 
                  <div align="center">19</div>
                </td>
                <td width="10%" height="17"> 
                  <div align="center">+5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Jenny 
                  Barnard </td>
                <td width="12%"> 
                  <div align="center">445</div>
                </td>
                <td width="9%">11</td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Julie 
                  Dore </td>
                <td width="12%"> 
                  <div align="center">1606</div>
                </td>
                <td width="9%"> 
                  <div align="center">41</div>
                </td>
                <td width="10%"> 
                  <div align="center">-15</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Robert 
                  Cowbury </td>
                <td width="12%"> 
                  <div align="center">1094</div>
                </td>
                <td width="9%"> 
                  <div align="center">28</div>
                </td>
                <td width="10%"> 
                  <div align="center">+6</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">512</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">3872</div>
                </td>
                <td width="9%"> 
                  <div align="center">32</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" ><span><a href="/archives/election/bea"</a></span>Beauchief &amp; Greenhill - Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">John Beatson 
                </td>
                <td width="12%"> 
                  <div align="center">525</div>
                </td>
                <td width="9%"> 
                  <div align="center">10</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Michelle 
                  Grant </td>
                <td width="12%"> 
                  <div align="center">941</div>
                </td>
                <td width="9%"> 
                  <div align="center">18</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">David 
                  Hayes </td>
                <td width="12%"> 
                  <div align="center">275</div>
                </td>
                <td width="9%"> 
                  <div align="center">5</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Neil Cleeveley 
                </td>
                <td width="12%"> 
                  <div align="center">1451</div>
                </td>
                <td width="9%"> 
                  <div align="center">27</div>
                </td>
                <td width="10%"> 
                  <div align="center">-5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Louise 
                  Mccann </td>
                <td width="12%"> 
                  <div align="center">2096</div>
                </td>
                <td width="9%"> 
                  <div align="center">40</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">645</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5288</div>
                </td>
                <td width="9%"> 
                  <div align="center">39</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Beighton -
                  Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Shirley 
                  Clayton </td>
                <td width="12%"> 
                  <div align="center">1234</div>
                </td>
                <td width="9%"> 
                  <div align="center">31</div>
                </td>
                <td width="10%"> 
                  <div align="center">+5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Julian 
                  Brandram </td>
                <td width="12%"> 
                  <div align="center">318</div>
                </td>
                <td width="9%"> 
                  <div align="center">8</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Ian Saunders</td>
                <td width="12%"> 
                  <div align="center">1730</div>
                </td>
                <td width="9%"> 
                  <div align="center">43</div>
                </td>
                <td width="10%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Tracey 
                  Williams </td>
                <td width="12%"> 
                  <div align="center">746</div>
                </td>
                <td width="9%"> 
                  <div align="center">19</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">496</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4028</div>
                </td>
                <td width="9%"> 
                  <div align="center">31</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Birley - Lab 
                  hold </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Gordon 
                  Millward </td>
                <td width="12%"> 
                  <div align="center">872</div>
                </td>
                <td width="9%"> 
                  <div align="center">20</div>
                </td>
                <td width="10%"> 
                  <div align="center">+5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Frank 
                  Plunkett </td>
                <td width="12%"> 
                  <div align="center">438</div>
                </td>
                <td width="9%"> 
                  <div align="center">10</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Bryan 
                  Lodge </td>
                <td width="12%"> 
                  <div align="center">2095</div>
                </td>
                <td width="9%"> 
                  <div align="center">48</div>
                </td>
                <td width="10%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00" height="2">Liberal 
                  Democrats</td>
                <td width="41%" height="2">Ben 
                  Curran </td>
                <td width="12%" height="2"> 
                  <div align="center">952</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">22</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">+6</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">&nbsp;</td>
                <td width="12%"> 
                  <div align="center">0</div>
                </td>
                <td width="9%"> 
                  <div align="center">0</div>
                </td>
                <td width="10%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1143</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4357</div>
                </td>
                <td width="9%"> 
                  <div align="center">34</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Broomhill 
                  - Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Michael 
                  Ginn </td>
                <td width="12%"> 
                  <div align="center">359</div>
                </td>
                <td width="9%"> 
                  <div align="center">13</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%"> Rob Cole 
                </td>
                <td width="12%"> 
                  <div align="center">756</div>
                </td>
                <td width="9%"> 
                  <div align="center">27</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Zoe Sykes</td>
                <td width="12%"> 
                  <div align="center">401</div>
                </td>
                <td width="9%"> 
                  <div align="center">14</div>
                </td>
                <td width="10%"> 
                  <div align="center">-3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Paul Scriven</td>
                <td width="12%"> 
                  <div align="center">1329</div>
                </td>
                <td width="9%"> 
                  <div align="center">47</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">573</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">2845</div>
                </td>
                <td width="9%"> 
                  <div align="center">25</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Burngreave 
                  - Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Rashid 
                  Zaman </td>
                <td width="12%"> 
                  <div align="center">593</div>
                </td>
                <td width="9%"> 
                  <div align="center">13</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Chris 
                  Sissons </td>
                <td width="12%"> 
                  <div align="center">638</div>
                </td>
                <td width="9%"> 
                  <div align="center">14</div>
                </td>
                <td width="10%"> 
                  <div align="center">+6</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Jaqueline 
                  Drayton </td>
                <td width="12%"> 
                  <div align="center">2369</div>
                </td>
                <td width="9%"> 
                  <div align="center">51</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">no candidate</td>
                <td width="12%"> 
                  <div align="center">0</div>
                </td>
                <td width="9%"> 
                  <div align="center">0</div>
                </td>
                <td width="10%"> 
                  <div align="center">-7</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#CC0000" height="2">The 
                  Left Party</td>
                <td width="41%" height="2">Maxine 
                  Bowler</td>
                <td width="12%" height="2"> 
                  <div align="center">1089</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">23</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1280</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4689</div>
                </td>
                <td width="9%"> 
                  <div align="center">32</div>
                </td>
                <td width="10%"> 
                  <div align="center">-5</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Central 
                  - Green gain from Lab</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">June Ledbury 
                </td>
                <td width="12%"> 
                  <div align="center">311</div>
                </td>
                <td width="9%"> 
                  <div align="center">8</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Rob Murphy</td>
                <td width="12%"> 
                  <div align="center">1611</div>
                </td>
                <td width="9%"> 
                  <div align="center">40</div>
                </td>
                <td width="10%"> 
                  <div align="center">+4</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Mohammed 
                  Maroof </td>
                <td width="12%"> 
                  <div align="center">1563</div>
                </td>
                <td width="9%"> 
                  <div align="center">39</div>
                </td>
                <td width="10%"> 
                  <div align="center">+8</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00" height="2">Liberal 
                  Democrats</td>
                <td width="41%" height="2">Mohammed 
                  Azim <br />
                </td>
                <td width="12%" height="2"> 
                  <div align="center">522</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">13</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">-10</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#CC0000" height="2">Respect</td>
                <td width="41%" height="2">no 
                  candidate </td>
                <td width="12%" height="2"> 
                  <div align="center">0</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">0</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">-4</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">187</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4007</div>
                </td>
                <td width="9%"> 
                  <div align="center">31</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Crookes -
                  Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Robert 
                  McIleven </td>
                <td width="12%"> 
                  <div align="center">1045</div>
                </td>
                <td width="9%"> 
                  <div align="center">21</div>
                </td>
                <td width="10%"> 
                  <div align="center">+4</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Julian 
                  Briggs </td>
                <td width="12%"> 
                  <div align="center">698</div>
                </td>
                <td width="9%"> 
                  <div align="center">14</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000" height="2">Labour</td>
                <td width="41%" height="2">Qurban 
                  Hussain </td>
                <td width="12%" height="2"> 
                  <div align="center">651</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">13</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">-3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00" height="2">Liberal 
                  Democrats</td>
                <td width="41%" height="2">Brian 
                  Holmes </td>
                <td width="12%" height="2"> 
                  <div align="center">2690</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">53</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1645</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5084</div>
                </td>
                <td width="9%"> 
                  <div align="center">38</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Darnall -
                  Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Anne Corke 
                </td>
                <td width="12%"> 
                  <div align="center">439</div>
                </td>
                <td width="9%"> 
                  <div align="center">10</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Julie 
                  White </td>
                <td width="12%"> 
                  <div align="center">228</div>
                </td>
                <td width="9%"> 
                  <div align="center">5</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Mary Lea</td>
                <td width="12%"> 
                  <div align="center">2039</div>
                </td>
                <td width="9%"> 
                  <div align="center">44</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00" height="2">Liberal 
                  Democrats</td>
                <td width="41%" height="2">Misbah 
                  Chowdhury </td>
                <td width="12%" height="2"> 
                  <div align="center">1484</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">32</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">+21</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#CC0000" height="2">Respect</td>
                <td width="41%" height="2">no 
                  candiate </td>
                <td width="12%" height="2"> 
                  <div align="center">0</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">0</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">-22</div>
                </td>
              </tr>
              <tr> 
                <td width="28%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">Charlotte 
                  Arnott </td>
                <td width="12%"> 
                  <div align="center">414</div>
                </td>
                <td width="9%"> 
                  <div align="center">9</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%">
                  <div align="center">555</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4604</div>
                </td>
                <td width="9%"> 
                  <div align="center">34</div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Dore &amp; 
                  Totley -                  Lib Dem gain from Con</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Anne Smith</td>
                <td width="12%"> 
                  <div align="center">3231</div>
                </td>
                <td width="9%"> 
                  <div align="center">44</div>
                </td>
                <td width="10%"> 
                  <div align="center">+9</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Rita Wilcock</td>
                <td width="12%"> 
                  <div align="center">183</div>
                </td>
                <td width="9%"> 
                  <div align="center">2</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Javed 
                  Khan </td>
                <td width="12%"> 
                  <div align="center">275</div>
                </td>
                <td width="9%"> 
                  <div align="center">4</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Colin 
                  Ross </td>
                <td width="12%"> 
                  <div align="center">3606</div>
                </td>
                <td width="9%"> 
                  <div align="center">49</div>
                </td>
                <td width="10%"> 
                  <div align="center">-3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">Jim Laurie 
                </td>
                <td width="12%"> 
                  <div align="center">124</div>
                </td>
                <td width="9%"> 
                  <div align="center">2</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%">
                  <div align="center">375</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">7419</div>
                </td>
                <td width="9%"> 
                  <div align="center">56</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >East 
                  Ecclesfield - Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">Shirley 
                  Collins </td>
                <td width="12%"> 
                  <div align="center">677</div>
                </td>
                <td width="9%"> 
                  <div align="center">13</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Paula 
                  Mayfield </td>
                <td width="12%"> 
                  <div align="center">582</div>
                </td>
                <td width="9%"> 
                  <div align="center">11</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Lamia 
                  Safir </td>
                <td width="12%"> 
                  <div align="center">181</div>
                </td>
                <td width="9%"> 
                  <div align="center">3</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Angela 
                  Wetherall </td>
                <td width="12%"> 
                  <div align="center">1622</div>
                </td>
                <td width="9%"> 
                  <div align="center">30</div>
                </td>
                <td width="10%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Patricia 
                  Fox </td>
                <td width="12%"> 
                  <div align="center">2314</div>
                </td>
                <td width="9%"> 
                  <div align="center">43</div>
                </td>
                <td width="10%"> 
                  <div align="center">+6</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">692</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5376</div>
                </td>
                <td width="9%"> 
                  <div align="center">38</div>
                </td>
                <td width="10%"> 
                  <div align="center">+8</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Ecclesal -l Lib Dem hold
                </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Michael 
                  Young</td>
                <td width="12%"> 
                  <div align="center">1630</div>
                </td>
                <td width="9%"> 
                  <div align="center">24</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Jason 
                  Leman </td>
                <td width="12%"> 
                  <div align="center">615</div>
                </td>
                <td width="9%"> 
                  <div align="center">9</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Jack Scott</td>
                <td width="12%"> 
                  <div align="center">547</div>
                </td>
                <td width="9%"> 
                  <div align="center">8</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Sylvia 
                  Dunkley </td>
                <td width="12%"> 
                  <div align="center">3893</div>
                </td>
                <td width="9%"> 
                  <div align="center">58</div>
                </td>
                <td width="10%"> 
                  <div align="center">+5</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">2263</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">6685</div>
                </td>
                <td width="9%"> 
                  <div align="center">47</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Firth Park -
                  Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">Michael 
                  Smith</td>
                <td width="12%"> 
                  <div align="center">742</div>
                </td>
                <td width="9%"> 
                  <div align="center">19</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF" height="18">Conservative</td>
                <td width="41%" height="18">Paul 
                  Rymill </td>
                <td width="12%" height="18"> 
                  <div align="center">377</div>
                </td>
                <td width="9%" height="18"> 
                  <div align="center">10</div>
                </td>
                <td width="10%" height="18"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Jonathon 
                  Cook </td>
                <td width="12%"> 
                  <div align="center">257</div>
                </td>
                <td width="9%"> 
                  <div align="center">7</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Joan Barton</td>
                <td width="12%"> 
                  <div align="center">1813</div>
                </td>
                <td width="9%"> 
                  <div align="center">48</div>
                </td>
                <td width="10%"> 
                  <div align="center">-5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Philip 
                  Morris </td>
                <td width="12%"> 
                  <div align="center">547</div>
                </td>
                <td width="9%"> 
                  <div align="center">14</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFFFF">Independent</td>
                <td width="41%">Maria-Barbara 
                  Noack </td>
                <td width="12%"> 
                  <div align="center">78</div>
                </td>
                <td width="9%"> 
                  <div align="center">2</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1071</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">3814</div>
                </td>
                <td width="9%"> 
                  <div align="center">30</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Fulwood -
                  Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Ian Pritchard 
                </td>
                <td width="12%"> 
                  <div align="center">1434</div>
                </td>
                <td width="9%"> 
                  <div align="center">27</div>
                </td>
                <td width="10%"> 
                  <div align="center">-7</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Stephen 
                  Hitchens </td>
                <td width="12%"> 
                  <div align="center">374</div>
                </td>
                <td width="9%"> 
                  <div align="center">7</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Isobel 
                  Bowler </td>
                <td width="12%"> 
                  <div align="center">432</div>
                </td>
                <td width="9%"> 
                  <div align="center">8</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">John Knight</td>
                <td width="12%"> 
                  <div align="center">2893</div>
                </td>
                <td width="9%"> 
                  <div align="center">55</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">Patricia 
                  Sullivan </td>
                <td width="12%"> 
                  <div align="center">139</div>
                </td>
                <td width="9%"> 
                  <div align="center">3</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1459</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5272</div>
                </td>
                <td width="9%"> 
                  <div align="center">44</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Gleadless 
                  Valley - 
                  Lib Dem gain from Lab</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Jennifer 
                  Grant </td>
                <td width="12%"> 
                  <div align="center">400</div>
                </td>
                <td width="9%"> 
                  <div align="center">8</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Gareth 
                  Roberts </td>
                <td width="12%"> 
                  <div align="center">781</div>
                </td>
                <td width="9%"> 
                  <div align="center">15</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Terrence 
                  Fox </td>
                <td width="12%"> 
                  <div align="center">1821</div>
                </td>
                <td width="9%"> 
                  <div align="center">35</div>
                </td>
                <td width="10%"> 
                  <div align="center">-3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Frank 
                  Taylor </td>
                <td width="12%"> 
                  <div align="center">2183</div>
                </td>
                <td width="9%"> 
                  <div align="center">42</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">362</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5185</div>
                </td>
                <td width="9%"> 
                  <div align="center">43</div>
                </td>
                <td width="10%"> 
                  <div align="center">3</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Graves Park -
                  Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Trevor 
                  Grant </td>
                <td width="12%"> 
                  <div align="center">885</div>
                </td>
                <td width="9%"> 
                  <div align="center">17</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Richard 
                  Roper </td>
                <td width="12%"> 
                  <div align="center">345</div>
                </td>
                <td width="9%"> 
                  <div align="center">6</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Bob Pemberton 
                </td>
                <td width="12%"> 
                  <div align="center">1102</div>
                </td>
                <td width="9%"> 
                  <div align="center">21</div>
                </td>
                <td width="10%"> 
                  <div align="center">-5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Peter 
                  Moore</td>
                <td width="12%"> 
                  <div align="center">2519</div>
                </td>
                <td width="9%"> 
                  <div align="center">47</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td width="28%" class="breadCrumbPath" height="2">Socialist 
                  Alternative</td>
                <td width="41%" height="2"> 
                  Alan Munro</td>
                <td width="12%" height="2"> 
                  <div align="center">271</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">5</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#9900CC" height="2">UK 
                  Independence</td>
                <td width="41%" height="2">Pauline 
                  Arnott </td>
                <td width="12%" height="2"> 
                  <div align="center">226</div>
                </td>
                <td width="9%" height="2"> 
                  <div align="center">4</div>
                </td>
                <td width="10%" height="2"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1417</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2" height="18"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%" height="18"> 
                  <div align="center">5348</div>
                </td>
                <td width="9%" height="18"> 
                  <div align="center">40</div>
                </td>
                <td width="10%" height="18"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Hillsborough 
                  - Lib Dem gain from Lab</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">Eric Collins</td>
                <td width="12%"> 
                  <div align="center">491</div>
                </td>
                <td width="9%"> 
                  <div align="center">9</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Neil Everest</td>
                <td width="12%"> 
                  <div align="center">292</div>
                </td>
                <td width="9%"> 
                  <div align="center">5</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Chris 
                  McMahon </td>
                <td width="12%"> 
                  <div align="center">346</div>
                </td>
                <td width="9%"> 
                  <div align="center">6</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Robert 
                  MacDonald </td>
                <td width="12%"> 
                  <div align="center">1620</div>
                </td>
                <td width="9%"> 
                  <div align="center">30</div>
                </td>
                <td width="10%"> 
                  <div align="center">-5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Joseph 
                  Taylor </td>
                <td width="12%"> 
                  <div align="center">2739</div>
                </td>
                <td width="9%"> 
                  <div align="center">50</div>
                </td>
                <td width="10%"> 
                  <div align="center">+6</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1119</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5488</div>
                </td>
                <td width="9%"> 
                  <div align="center">42</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Manor 
                  Castle - Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Christina 
                  Stark </td>
                <td width="12%"> 
                  <div align="center">400</div>
                </td>
                <td width="9%"> 
                  <div align="center">13</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Graham 
                  Wroe </td>
                <td width="12%"> 
                  <div align="center">357</div>
                </td>
                <td width="9%"> 
                  <div align="center">12</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Patricia 
                  Midgley </td>
                <td width="12%"> 
                  <div align="center">1621</div>
                </td>
                <td width="9%"> 
                  <div align="center">53</div>
                </td>
                <td width="10%"> 
                  <div align="center">-8</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Dave Croft 
                </td>
                <td width="12%"> 
                  <div align="center">687</div>
                </td>
                <td width="9%"> 
                  <div align="center">22</div>
                </td>
                <td width="10%"> 
                  <div align="center">+5</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">934</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">3065</div>
                </td>
                <td width="9%"> 
                  <div align="center">27</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Mosborough 
                  - 2 Lib Dem gains from Lab</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Eve Millward 
                </td>
                <td width="12%"> 
                  <div align="center">746</div>
                </td>
                <td rowspan="2" width="9%"> 
                  <div align="center"></div>
                  <div align="center">14</div>
                </td>
                <td rowspan="2" width="10%"> 
                  <div align="center"></div>
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Margaret 
                  Piggott </td>
                <td width="12%"> 
                  <div align="center">561</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Anwen 
                  Fryer </td>
                <td width="12%"> 
                  <div align="center">290</div>
                </td>
                <td width="9%"> 
                  <div align="center">3</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Sarah 
                  Cullen </td>
                <td width="12%"> 
                  <div align="center">1660</div>
                </td>
                <td rowspan="2"> 
                  <div align="center">35</div>
                  </td>
                <td rowspan="2"> 
                  <div align="center">-7</div>
                  </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Andrew 
                  Peat </td>
                <td width="12%"> 
                  <div align="center">1626</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Gail Smith 
                </td>
                <td width="12%"> 
                  <div align="center">2451</div>
                </td>
                <td rowspan="2"> 
                  <div align="center">48</div>
                  </td>
                <td rowspan="2"> 
                  <div align="center">+14</div>
                  </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Christopher 
                  Tutt </td>
                <td width="12%"> 
                  <div align="center">2019</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">no candidate</td>
                <td width="12%"> 
                  <div align="center">0</div>
                </td>
                <td width="9%"> 
                  <div align="center">0</div>
                </td>
                <td width="10%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">359</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">9353</div>
                </td>
                <td width="9%"> 
                  <div align="center">38</div>
                </td>
                <td width="10%"> 
                  <div align="center">+4</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Nether Edge -
                  Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Rosita 
                  Malandrinos </td>
                <td width="12%"> 
                  <div align="center">359</div>
                </td>
                <td width="9%"> 
                  <div align="center">6</div>

                </td>
                <td width="10%"> 
                  <div align="center">-4</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Mervyn 
                  Smith </td>
                <td width="12%"> 
                  <div align="center">780</div>
                </td>
                <td width="9%"> 
                  <div align="center">13</div>
                </td>
                <td width="10%"> 
                  <div align="center">-7</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Mohammed 
                  Hafiz </td>
                <td width="12%"> 
                  <div align="center">2165</div>
                </td>
                <td width="9%"> 
                  <div align="center">36</div>
                </td>
                <td width="10%"> 
                  <div align="center">+5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Ali Qadar</td>
                <td width="12%"> 
                  <div align="center">2661</div>
                </td>
                <td width="9%"> 
                  <div align="center">45</div>
                </td>
                <td width="10%"> 
                  <div align="center">+6</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">496</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5965</div>
                </td>
                <td width="9%"> 
                  <div align="center">47</div>
                </td>
                <td width="10%"> 
                  <div align="center">+7</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Richmond 
                  - 2 Lab holds</td>
              </tr>
              <tr> 
                <td width="27%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="11%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Ian Fey 
                </td>
                <td width="12%"> 
                  <div align="center">618</div>
                </td>
                <td rowspan="2"> 
                  <div align="center">15</div>
                </td>
                <td rowspan="2"> 
                  <p>+4</p>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Maureen 
                  Neil </td>
                <td width="12%"> 
                  <div align="center">560</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Eamonn 
                  Ward </td>
                <td width="12%"> 
                  <div align="center">439</div>
                </td>
                <td width="9%"> 
                  <div align="center">6</div>
                </td>
                <td width="11%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFFFF">Independent</td>
                <td width="41%">no candidate</td>
                <td width="12%"> 
                  <div align="center">0</div>
                </td>
                <td width="9%"> 
                  <div align="center">0</div>
                </td>
                <td width="11%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#FF0000">Labour</td>
                <td width="41%">David 
                  Lawton </td>
                <td width="12%"> 
                  <div align="center">1693 </div>
                </td>
                <td rowspan="2">45 
                  <div align="center"></div>
                </td>
                <td rowspan="2"> 
                  <div align="center">-7</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Lynn Rooney</td>
                <td width="12%"> 
                  <div align="center">1759 </div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Paul Hanson</td>
                <td width="12%"> 
                  <div align="center">736</div>
                </td>
                <td rowspan="2"> 
                  <div align="center">19</div>
                </td>
                <td rowspan="2"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Barbara 
                  Masters </td>
                <td width="12%"> 
                  <div align="center">699</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">Les Arnott 
                </td>
                <td width="12%"> 
                  <div align="center">618</div>
                </td>
                <td rowspan="2">13 
                  <div align="center"></div>
                </td>
                <td rowspan="2"> 
                  <div align="center">+4</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">Jennifer-Marie 
                  Ruchat </td>
                <td width="12%"> 
                  <div align="center">356</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">957</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="11%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">7712</div>
                </td>
                <td width="9%"> 
                  <div align="center">32</div>
                </td>
                <td width="11%"> 
                  <div align="center">0</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Shiregreen 
                  &amp; Brightside - Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">Tracey 
                  Smith </td>
                <td width="12%">
                  <div align="center">846 </div>
                  <div align="center"></div>
                </td>
                <td width="9%"> 
                  <div align="center">21</div>
                </td>
                <td width="10%"> 
                  <div align="center">-3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Eric Kirby</td>
                <td width="12%"> 
                  <div align="center">451</div>
                </td>
                <td width="9%"> 
                  <div align="center">11</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Steve 
                  Brady </td>
                <td width="12%"> 
                  <div align="center">227</div>
                </td>
                <td width="9%"> 
                  <div align="center">6</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td  width="27%" class="breadCrumbPath" bgcolor="#FFFFFF">Independent</td>
                <td width="41%">Glynn 
                  Tipper </td>
                <td width="12%"> 
                  <div align="center">350</div>
                </td>
                <td width="9%"> 
                  <div align="center">9</div>
                </td>
                <td width="11%"> 
                  <div align="center">+9</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Jane Bird</td>
                <td width="12%"> 
                  <div align="center">1757</div>
                </td>
                <td width="9%"> 
                  <div align="center">44</div>
                </td>
                <td width="10%"> 
                  <div align="center">-8</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Tasadique 
                  Mohammed </td>
                <td width="12%"> 
                  <div align="center">350</div>
                </td>
                <td width="9%"> 
                  <div align="center">9</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">911</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">3981</div>
                </td>
                <td width="9%"> 
                  <div align="center">30</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Southey 
                  - Lab hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">John Sheldon</td>
                <td width="12%"> 
                  <div align="center">1031</div>
                </td>
                <td width="9%"> 
                  <div align="center">26</div>
                </td>
                <td width="10%"> 
                  <div align="center">+7</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Russel 
                  Cutts </td>
                <td width="12%"> 
                  <div align="center">437</div>
                </td>
                <td width="9%"> 
                  <div align="center">11</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Gemma 
                  Lock </td>
                <td width="12%"> 
                  <div align="center">162</div>
                </td>
                <td width="9%"> 
                  <div align="center">4</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Anthony 
                  Damms </td>
                <td width="12%"> 
                  <div align="center">1695</div>
                </td>
                <td width="9%"> 
                  <div align="center">42</div>
                </td>
                <td width="10%"> 
                  <div align="center">-12</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">John Bowden 
                </td>
                <td width="12%"> 
                  <div align="center">716</div>
                </td>
                <td width="9%"> 
                  <div align="center">18</div>
                </td>
                <td width="10%"> 
                  <div align="center">+4</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">664</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4041</div>
                </td>
                <td width="9%"> 
                  <div align="center">31</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Stannington -
                  Lib Dem hold </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Andrew 
                  Lee </td>
                <td width="12%"> 
                  <div align="center">883</div>
                </td>
                <td width="9%"> 
                  <div align="center">17</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Martin 
                  Bradshaw </td>
                <td width="12%"> 
                  <div align="center">351</div>
                </td>
                <td width="9%"> 
                  <div align="center">7</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Alfe Meade</td>
                <td width="12%"> 
                  <div align="center">1314</div>
                </td>
                <td width="9%"> 
                  <div align="center">25</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Arthur 
                  Dunworth </td>
                <td width="12%"> 
                  <div align="center">2713</div>
                </td>
                <td width="9%"> 
                  <div align="center">52</div>
                </td>
                <td width="10%"> 
                  <div align="center">+3</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1399</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%">
                  <div align="center">5261 </div>
                  <div align="center"></div>
                </td>
                <td width="9%"> 
                  <div align="center">41</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" > 
                  Stocksbridge &amp; Upper Don - Lib Dem gain from Ind
                  </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">David 
                  Wright </td>
                <td width="12%"> 
                  <div align="center">534</div>
                </td>
                <td width="9%"> 
                  <div align="center">8</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Matthew 
                  Dixon </td>
                <td width="12%"> 
                  <div align="center">1076</div>
                </td>
                <td width="9%"> 
                  <div align="center">17</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Angela 
                  Roberts </td>
                <td width="12%"> 
                  <div align="center">327</div>
                </td>
                <td width="9%"> 
                  <div align="center">5</div>
                </td>
                <td width="10%"> 
                  <div align="center">-4</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFFFF">Independent</td>
                <td width="41%">Martin 
                  Davis </td>
                <td width="12%"> 
                  <div align="center">1371</div>
                </td>
                <td width="9%"> 
                  <div align="center">22</div>
                </td>
                <td width="10%"> 
                  <div align="center">+22</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">James 
                  Bamford </td>
                <td width="12%"> 
                  <div align="center">761</div>
                </td>
                <td width="9%"> 
                  <div align="center">12</div>
                </td>
                <td width="10%"> 
                  <div align="center">-12</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Andrew 
                  Clarkson </td>
                <td width="12%"> 
                  <div align="center">2258</div>
                </td>
                <td width="9%"> 
                  <div align="center">36</div>
                </td>
                <td width="10%"> 
                  <div align="center">-3</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">887</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">6327</div>
                </td>
                <td width="9%"> 
                  <div align="center">41</div>
                </td>
                <td width="10%"> 
                  <div align="center">+5</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Walkley - 
                  Lib Dem hold</td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">George 
                  Ledbury </td>
                <td width="12%"> 
                  <div align="center">283</div>
                </td>
                <td width="9%"> 
                  <div align="center">5</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">James 
                  Wilson </td>
                <td width="12%"> 
                  <div align="center">540</div>
                </td>
                <td width="9%"> 
                  <div align="center">10</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Veronica 
                  Hardstaff </td>
                <td width="12%"> 
                  <div align="center">1899</div>
                </td>
                <td width="9%"> 
                  <div align="center">35</div>
                </td>
                <td width="10%"> 
                  <div align="center">-6</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Diane 
                  Leek </td>
                <td width="12%"> 
                  <div align="center">2679</div>
                </td>
                <td width="9%"> 
                  <div align="center">50</div>
                </td>
                <td width="10%"> 
                  <div align="center">+9</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">780</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5401</div>
                </td>
                <td width="9%"> 
                  <div align="center">40</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >West 
                  Ecclesfield - Lib Dem hold </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#000099">BNP</td>
                <td width="41%">Malcolm 
                  Woodhead </td>
                <td width="12%"> 
                  <div align="center">630</div>
                </td>
                <td width="9%"> 
                  <div align="center">12</div>
                </td>
                <td width="10%"> 
                  <div align="center">+12</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Robert 
                  McIlveen </td>
                <td width="12%"> 
                  <div align="center">552</div>
                </td>
                <td width="9%"> 
                  <div align="center">10</div>
                </td>
                <td width="10%"> 
                  <div align="center">-1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">Kathryn 
                  Aston </td>
                <td width="12%"> 
                  <div align="center">193</div>
                </td>

                <td width="9%"> 
                  <div align="center">4</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Maxwell 
                  Telfer </td>
                <td width="12%"> 
                  <div align="center">1130</div>
                </td>
                <td width="9%"> 
                  <div align="center">21</div>
                </td>
                <td width="10%"> 
                  <div align="center">-10</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Kathleen 
                  Chadwick </td>
                <td width="12%"> 
                  <div align="center">2763</div>
                </td>
                <td width="9%"> 
                  <div align="center">52</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1633</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">5268</div>
                </td>
                <td width="9%"> 
                  <div align="center">37</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
            </table>
			<br />
            <table width="100%" border="1">
              <tr bgcolor="#CCCC99"> 
                <td colspan="5" >Woodhouse 
                  - Lab hold </td>
              </tr>
              <tr> 
                <td width="28%"><b>Party 
                  </b></td>
                <td width="41%"><b>Candidate</b></td>
                <td width="12%"> 
                  <div align="center"><b> Votes</b></div>
                </td>
                <td width="9%"> 
                  <div align="center"><b>% </b></div>
                </td>
                <td width="10%"> 
                  <div align="center"><b>&plusmn;%</b></div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#0000FF">Conservative</td>
                <td width="41%">Laurence 
                  Hayward </td>
                <td width="12%"> 
                  <div align="center">700</div>
                </td>
                <td width="9%"> 
                  <div align="center">16</div>
                </td>
                <td width="10%"> 
                  <div align="center">+4</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#669900">Green 
                  Party</td>
                <td width="41%">John Grant 
                </td>
                <td width="12%"> 
                  <div align="center">291</div>
                </td>
                <td width="9%"> 
                  <div align="center">7</div>
                </td>
                <td width="10%"> 
                  <div align="center">+1</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#FF0000">Labour</td>
                <td width="41%">Marjorie 
                  Barker </td>
                <td width="12%"> 
                  <div align="center">2041</div>
                </td>
                <td width="9%"> 
                  <div align="center">48</div>
                </td>
                <td width="10%"> 
                  <div align="center">-5</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" class="breadCrumbPath" bgcolor="#FFFF00">Liberal 
                  Democrats</td>
                <td width="41%">Chris 
                  Bingham </td>
                <td width="12%"> 
                  <div align="center">661</div>
                </td>
                <td width="9%"> 
                  <div align="center">15</div>
                </td>
                <td width="10%"> 
                  <div align="center">+2</div>
                </td>
              </tr>
              <tr> 
                <td  width="28%" bgcolor="#9900CC">UK 
                  Independence</td>
                <td width="41%">Jonathan 
                  Arnott </td>
                <td width="12%"> 
                  <div align="center">593</div>
                </td>
                <td width="9%"> 
                  <div align="center">14</div>
                </td>
                <td width="10%"> 
                  <div align="center">-2</div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Majority</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">1341</div>
                </td>
                <td width="9%"> 
                  <div align="center"></div>
                </td>
                <td width="10%"> 
                  <div align="center"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2"> 
                  <div align="right"><b>Turnout</b></div>
                </td>
                <td width="12%"> 
                  <div align="center">4286</div>
                </td>
                <td width="9%"> 
                  <div align="center">33</div>
                </td>
                <td width="10%"> 
                  <div align="center">0</div>
                </td>
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