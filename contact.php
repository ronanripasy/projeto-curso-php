<?php include 'topo.php'; ?>
<body>
  <?php include 'menu.php'; ?>		
      <div class="main">
		<div class="contact">
			<div class="wrap">
				<!---start-contact---->
				<div class="section group">
					<div class="col span_1_of_3">
						<div class="contact_info">
							<h3>Find Us Here</h3>
							<div class="map">
								<iframe width="100%" height="400" frameborder="0" scrolling="no"
									marginheight="0" marginwidth="0"
									src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe>
								<br> <small><a
									href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265"
									style="color: #666; text-align: left; font-size: 0.85em">View
										Larger Map</a></small>
							</div>
						</div>
					</div>
					<div class="col span_2_of_3">
						<div class="contact-form">
							<h3>Contact Us</h3>
							<form method="post" action="contact-post.html">
								<div>
									<span><label>NAME</label></span> <span><input name="userName"
										type="text" class="textbox" required="required"></span>
								</div>
								<div>
									<span><label>E-MAIL</label></span> <span><input
										name="userEmail" type="email" class="textbox" required="required"></span>
								</div>
								<div>
									<span><label>ASSUNTO</label></span> 
									<span>
									  <select name="assunto" required="required">
									    <option value="">[SELECIONE] </option>
									    <option value="dúvida">Dúvida </option>
									    <option value="critica">Critica </option>
									    <option value="sugestão">Sugestão </option>
									  </select>
									</span>
								</div>
								<div>
									<span><label>SEXO</label></span> 
									<span>
									    <input type="radio" name="sexo" value="masculino">Masculino 
									    <input type="radio" name="sexo" value="feminino">Feminino 
									</span>
								</div>
								<div>
									<span><label>MELHOR HORÁRIO PARA ENTRARMOS EM CONTADO</label></span> 
									<span>
									    <input type="checkbox" name="melhorHorario[]" value="manhã">Manhã 
									    <input type="checkbox" name="melhorHorario[]" value="tarde">Tarde
									    <input type="checkbox" name="melhorHorario[]" value="noite">Noite 
									</span>
								</div>
								<div>
									<span><label>SUBJECT</label></span> <span><textarea
											name="userMsg" required="required"></textarea></span>
								</div>
								<div>
									<span><input type="submit" class="mybutton" value="Submit"></span>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
			<!---End-contact---->
			<div class="clear"></div>
		</div>
	</div>
      <?php include 'rodape.php'; ?>
</body>
</html>

