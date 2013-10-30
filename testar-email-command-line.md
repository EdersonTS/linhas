Testando conexão de POP/SMTP

Telnet
  telnet <host> <port>
  # telnet pop3.domain.com 110
  # telnet smtp.domain.com 587

Netcat
  nc <host> <port>
  # nc pop3.domain.com 110
  # nc smtp.domain.com 587

POP commands:
  USER uid           Log in as "uid"
  PASS password      Substitue "password" for your actual password
  STAT               List number of messages, total mailbox size
  LIST               List messages and sizes
  RETR n             Show message n
  DELE n             Mark message n for deletion
  RSET               Undo any changes
  QUIT               Logout (expunges messages if no RSET)
  TOP msg n          Show first n lines of message number msg

SMTP commands:
