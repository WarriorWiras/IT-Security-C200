# IT-Security-C200

C200 is a course module created by SOI RP called Special Project which aims to understand technical skills, hand-on skills and soft skills like teamwork and problem-solving. In addition, C200 IT Security Track, provide a greater understanding on how to gain access to systems and provide mitigations to solve the vulnerability. 

## Overview:

This project focus on creting a network ecosystem usually found in a company. For example, there are users, CEO, Managers and many more. The objective is create this network and try to gain access, priviledge escalate and evetually finding a secret file in CEO computer. Once, understand the vulnerabilities within the system, there will be a need to mitigate those vulnerabilities in other to prevent gaining access to the system the same way again.

## Introduction:

Cool4Guys is a company dedicated to interactive and digital entertainment. And is responsible for the creation of their 4G Gaming Console line and family of products and services. 


## Project Specification / Requirements

→ Kali Linux targeting a victim machine running on Linux or/and Ubuntu

→ Use of any tool to perform an attack using Metasploit, Bash/Shell code, etc

→ Use Website & OS exploitations to get root and compromise the system

→ Exploiting the AD server via Zerologon & Kerberos Golden ticket

→ Exploit Website (File upload, XSS, XSRF, SQL injection, etc)

→ Buffer overflow, Dirty Cow

→ Privilege escalation

→ Pivoting

→ Misconfiguration

All of this made possible by using Virtual Machines



## Project Walk Through / Demonstration

Story 1:

An attacker from outside (public) want to steal the secret formula for our console. To make this, the attacker saw the vulnerability in the website of the company try to exploit to gain the secret formula from there in the file server. The whole purpose of attack from outside is to get a file that can only be accessed with people with high privilege(NT/Authority) Which contains the employee data, and the secret technology that we use to create our consoles. 

Here is a summary of the attack structure:
1. We start by Scanning the web server for any vulnerability (Nmap, OWASP,  Burp Suite)
2. SQL Injection, SQLmap to check website and gain to the admin account
3. Use file upload and XSS to gain backdoor (www-data)
4. Privilege escalation (www-data → Root)
5. Do a network scanning
6. Pivoting to email server
7. Pivoting to file server
8. Buffer overflow to get the secret formula


Story 2:

An insider attacker (Internal) with a goal to change the salary due to the attacker not happy with that and want to change it. The second attack which is from the inside is with the use of AD, either the kerboros or whatever get the thing change the pay.

Here is a summary of the attack structure:
1. We start by do a recon of the network and found AD server
2. Exploit AD using ZeroLogon
3. Cracking the NTLM hashes
4. Kerberos Golden ticket from Windows 10
5. Infiltrate to AD server then infiltrate to CEO Machine via shared folder




