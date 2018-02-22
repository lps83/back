<!-- content Comprendre -->
      <div id="content">

                <!-- block Fade in/out Message box -->

                <h3><span class="title">Fade in/out Message box</span><span class="underlined">&nbsp;</span></h3>
                <input type="button" class="button" value="Click here to show message box" name="open_msgbox" id="open_msgbox" />
                <div class="msgbox" id="msgbox1">
                    <div class="icon"><img src="img/icons/alert.gif" alt="" title="" /></div>
                    <div class="text">
                        This block is used to display messages ( e.g. Your Page was successfully updated. )
                        <br />
                        click icon to close this message box!<br />
                    </div>
                    <div class="close"><a href="#" id="close_msgbox" title="Close message box"><img src="img/icons/icon_minus.gif" alt="" title="" /></a></div>
                    <div class="clear"></div>
                </div>
                <!-- end block Fade in/out Message box -->

                <!-- block example table -->

                <h3><span class="title">Example Table</span><span class="underlined">&nbsp;</span></h3>
                <a class="add" href="#" title="">Add new record</a>
                <div class="tablebox">
                  <table>
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th class="action">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr class="row0">
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john</td>
                            <td>john.doe@mail.ml</td>
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr>
                          <tr class="row1">
                            <td>2</td>
                            <td>Jane</td>
                            <td>Doe</td>
                            <td>jane</td>
                            <td>jane.doe@mail.ml</td>
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr>
                          <tr class="row0">
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john</td>
                            <td>john.doe@mail.ml</td>
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr>
                          <tr class="row1">
                            <td>3</td>
                            <td>Jane</td>
                            <td>Doe</td>
                            <td>jane</td>
                            <td>jane.doe@mail.ml</td>
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr>
                          <tr class="row0">
                            <td>4</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john</td>
                            <td>john.doe@mail.ml</td>
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr>
                          <tr class="row1">
                            <td>5</td>
                            <td>Jane</td>
                            <td>Doe</td>
                            <td>jane</td>
                            <td>jane.doe@mail.ml</td>
                            <td class="action"><a href='#' title=""><img src="img/icons/contents.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/trash_on.gif" alt="" title="" /></a><a href='#' title=""><img src="img/icons/edit_small.gif" alt="" title="" /></a></td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                          <tr>
                              <td class="pagination_limit">
                              View
                              <select name="nlimit">
                                  <option value="10">10</option>
                                  <option value="20">20</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                              </select> per page | Total: 224 records found
                              </td>
                              <td class="pagination">
                                  <ul>
                                      <li><a href="#">Prev</a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#" class="selected">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">..</a></li>
                                      <li><a href="#">12</a></li>
                                      <li><a href="#">Next</a></li>
                                  </ul>
                              </td>
                          </tr>
                  </table>
                </div>
                <!-- end block example table -->
                <br />
                <form action="#" class="search" method="post">
                    <p>
                        <input name="searchtext" value="search text" type="text" class="search" size="30" />
                    </p>
                </form>
                <!-- block example form -->

                <h3><span class="title">Example Form</span><span class="underlined">&nbsp;</span></h3>
				<form action="#" method="post">
                <fieldset>
                <legend>Contact form</legend>
    				<p>
        				<label>Name</label>
        				<input name="dname" value="Your Name" type="text" size="30" />
        				<label>Email <span class="required">*</span></label>
        				<input name="demail" class="error" value="Your Email" type="text" size="30" />
                        <span class="error">Email is required</span>
        				<label>Your Comments</label>
        				<textarea rows="5" cols="5"></textarea>
        				<br />
        				<input class="button" type="submit" value="Send comment" />
    				</p>
                </fieldset>
				</form>
                <!-- end block example form -->


                <div class="clear"></div>
      </div>
      <!-- end div content comprendre-->