<?php
include_once 'includes.php';
$school = new School($_GET['schoolID']);

?>

<h1><span id="schoolName"><?php echo $school->getName()?></span> --> Western Kentucky University</h1>
<?php
$courses = new Course();

$params;
$params['fld'] = 'SchoolID';
$params['val'] = $school->getID();

$courses = $courses->FindByParams($params);
?>

<tr bgcolor=silver>
    <th align="center" colspan="3"><?php echo $school->getName()?></th>
    <th align="center" colspan="6">Western Kentucky University</th>
</tr>
<br />

    
<?php foreach($courses as $c){ ?>
    <tr bgcolor="silver">
        <td><?php echo $c->getNumber() ?></td>
        <td><?php echo $c->getName() ?></td>
        <td align="right"><?php echo $c->getHours() ?></td>
        
        <?php
        $wkuCourse = new wkuCourse($c->getEquivalent());
        ?>
        
        <td><?php echo $wkuCourse->get_Number()?></td>
        <td><?php echo $wkuCourse->get_Title()?></td> 
        <td align="right"><?php echo $wkuCourse->get_Hours()?></td>
        <td><?php echo $wkuCourse->get_AndOr()?></td>
        <td><?php echo $wkuCourse->get_GenEd()?></td>
        <td><?php echo $wkuCourse->get_Colonnade()?></td>
    </tr>
<?php } ?>
