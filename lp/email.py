import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText


mail_content = """Olá Thainá,
Novo usuario cadastrado no seu site!
"""
#The mail addresses and password
sender_address = 'sac@thainadutra.com.br'
sender_pass = '@ndrE2022.'
receiver_address = 'andresoaresdiniz201218@gmail.com'
#Setup the MIME
message = MIMEMultipart()
message['From'] = sender_address
message['To'] = receiver_address
message['Subject'] = 'A test mail sent by Python. It has an attachment.'   #The subject line
#The body and the attachments for the mail
message.attach(MIMEText(mail_content, 'plain'))
#Create SMTP session for sending the mail
session = smtplib.SMTP('smtp.hostinger.com', 587) #use gmail with port
session.starttls() #enable security
session.login(sender_address, sender_pass) #login with mail_id and password
text = message.as_string()
session.sendmail(sender_address, receiver_address, text)
session.quit()