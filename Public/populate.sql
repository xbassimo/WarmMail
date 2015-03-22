use mail;

insert into users values 
('wangxb', sha1('123456'), 'email@host.domain', 'Full Name');

insert into accounts values 
('user', 'localhost', '110', 'POP3', 'user', 'password', ''),
('user', 'localhost', '143', 'IMAP', 'user', 'password', '');

