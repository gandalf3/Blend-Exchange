            <form id="uploadTarget" class="bodyStack">
                <div id="uploadText">
                    <div class="centerText">
                        Drag a file here to upload a .blend<br /> or<br /> click to browse
                    </div>
                </div>
                    <div id="uploadArea">

                    </div>
            </form>
            <div id="uploadOptions">
                <input id="SEUrl" class="txtBlue bodyStack" <?php if(isset($embedUpload) && ($embedUpload == true)){echo 'style="display: none;"';}?> id="questionUrl" placeholder="Enter the url of the queston on blender.stackexchange" value="<?php if(isset($questionLink)) { echo $questionLink; }?>"/>
                <div id="upload" class="btnBlue bodyStack" style="width: 289px; margin-left: 10px; display: inline-block;">
                    Upload
                </div>
            </div>
            <div id="advancedOptions">
               <div>
                   <input class="txtBlue bodyStack" id="password" placeholder="Enter a password to enable editing or deleting (optional)"/>
               </div>
            </div>