<?php
			// output data of each row
			while($post = $res->fetch_assoc()) { 
				if ($post["status"] == 1) { ?>
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
								<br /><br /><br /><br />
								<h1><?php echo $post["title"]; ?></h1>
								<img src="<?php echo BASE_ADDRESS . IMG_F . $post["cover"]; ?>" class="img-responsive" /><br /><br />
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="<?php echo $post["video"]; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
								<p><br /><br /><?php echo $post["content"]; ?></p>
								<hr width="100%" />
								<p>
									'이 달의 코리에이터'는 월간 인터뷰 시리즈입니다. 한인 예술인 커뮤니티를 구축하는 데에서 이미 각자의 분야에서 여러 가지를 성취하신 기성 예술인분들의 이야기를 공유하는 것을 목표로 하며 예술에 관심이 있는 청년층에게 긍정적인 영향을 줄 수 있는 프로젝트로 자리매김하고 있습니다.<br /><br />
									The Coreator of the Month series is one of our marketing projects where we interview established Korean-Canadian artists in their respective fields and write an article (both video and text included) to capture their story as an inspiration for the younger generation of Korean-Canadian community that is interested in arts or any creative pursuits.
								</p>
								<p>
									인터뷰 담당자: <i>전지원, 방서원, 도세진</i><br />
									Interviewer: <i>Jiwon Chun, Seowon Bang, Sejin Do</i>
								</p>
							</div>
						</div>
					</div>
		<?php	
				}
			}
			?>