<div id="backgroundcontainer">
	<div id="content">

        <table>    
        <?php foreach($query->result() as $row):?>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td  rowspan="4"><img src="images/uploaded/properties/<?= $row->picture;?>" alt="property image" height="230px" width="300px"/></td>
                            <td valign="top">
                                <table>
                                    <tr>
                                        <td valign="top"><span class="pinktext">Post Code:</span></td>
                                        <td valign="top"><?= $row->post_code;?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span class="pinktext">Description:</span></td>
                                        <td valign="top"><?= $row->description;?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span class="pinktext">Internal:</span></td>
                                        <td valign="top"><?= $row->internals;?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span class="pinktext">Reserve:</span></td>
                                        <td valign="top">&pound;<?= $row->reserve_price;?></td>
                                    </tr>
                                 </table>          
                            </td>
                        </tr>
                     </table>
                 </td>
             </tr>
             <tr>
                 <td>
                   <hr/>
                 </td>
             </tr>
        <?php endforeach;?>
        </table>

     </div>
