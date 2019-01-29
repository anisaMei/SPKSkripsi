<table border="1">
								        <tr>
								            <td align="center">Kategori</td>
								            	
								            	<?php foreach ($hasilKategori as $l) { ?>
											<td align="center">												
												&nbsp<?php echo $l['nama_kategori'] ?> &nbsp

											</td>
												<?php } ?>
							            
								        </tr>								            	
								         


							            </tr>

									        	<?php 
												foreach ($hasilKategori as $r) { ?>
											<tr align="center">
												
													<td>
														&nbsp<?php echo $r['nama_kategori'] ?> &nbsp
													</td>

												<!-- content tabel begin-->
														<?php foreach ($hasilKategori as $l) { ?>
												<td align="center">	
													<?php 
														if($l==$r)
														{
															echo "1";
														}
														elseif ($l>$r) 
														{
															echo '
																	<select name="kategori" class="form-control" style="width:200px">
																		<option>Pilih bobot yang sesuai</option>
																	 	<?php foreach ($hasilKategori as $r) { ?>
																				
																				<option value="<?php echo $r["id_kategori"] ?>">
																					&nbsp<?php echo $r["nama_kategori"] ?> &nbsp
																				</option>										
																				
																			
																				<?php } ?>
																	 </select>
															';
														}
														else{
															$b=$l>$r;
															if($b == 1)
															{
																echo "1";
															}
															else
															{
																echo "2";
															}
														}
													?>
												</td>
													<?php } ?>
												<!-- content tabel end -->
											</tr>
												<?php } ?>
									
												<!-- <td>&nbsp Jumlah &nbsp</td>	 -->								

								    </table>