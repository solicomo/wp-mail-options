��    P      �  k         �  �  �     O
     a
  
   r
  
   }
     �
     �
     �
     �
     �
     �
     �
     �
     �
     �
  /   �
     (     1     L     P  	   U     _     x     �  	   �  5   �     �     �     �            |   ,  
   �  �   �  n   [     �     �  
   �  	   �  	   �            	   #     -     9     G     T     b     o     �  G   �  $   �            6   *  f   a      �  %   �  r     ,   �  "   �  9   �  �     \   �  �   U      �  "   �  @     �   ]  a     &   g  �   �  N   �     �     �  ?  �     %     (     8  �  A  �  4     �     �     �     �     �  	   �  	          	             /     <     [     k  0   {     �     �     �     �     �     �  	        "     5  6   >     u     �     �     �     �  n   �     >  �   Q  |   �     T      [   
   l      w   
   �      �   
   �   
   �   
   �      �   
   �      �      �      �      !  7   *!  "   b!     �!     �!  F   �!  b   �!     T"     m"  \   �"     �"     #  5   !#  �   W#  W   O$  �   �$     L%     b%  '   �%  �   �%  o   �&     �&    '  `   (     }(     �(  -  �(  	   �)     �)     �)     +   D   C   *   L                <         $   (      #             8   7   ;   ?                  F       K   )   .   "   	   J              H          >       =   B   !             4       M                 1   E          -      ,   N      :   6         /           3              %   A   '              I           O   2   0              @          9   G   &       5       
         P          <p>This plugin allows you to set almost all options of emails sent by WordPress. In fact, it just simply modified the value of the PHPMailer's member variables, which is offered on the right, including their description, type, name and default vlaue following the equal sign.</p>
<p>In most cases, this plugin replace the old value of each variable with the new value you give below; for the rest, it apends new value after the old value, for instance, To, Cc, Bcc and so on.</p>
<p>Some options will affect others to be effective, like if "Mailer" be set as "mail" or "sentmail", all options about SMTP in the following will be valid.</p>
<p>If you don't want (or know how to) set one option, you should leave it blank.</p>
<p><b>Warning:</b> This plugin is only for advanced users. You should know exactly what effect each option will have on the behavior of PHPMailer when you use this plugin. </p> About this plugin Alternative Body Attachment Author URI Bcc Body Boundary Cc CharSet Configuration updated Confirm Reading To Content-type Custom Header Email Priority Email priority (1 = High, 3 = Normal, 5 = low). Encoding Error while saving options FAQ From From Name Holds PHPMailer version. Hostname Mailer MessageID Method to send mail: ("mail", "sendmail", or "smtp"). PHPMailer Plugins Path PHPMailer Version PROPERTIES FOR SMTP PROPERTIES, PRIVATE PROPERTIES, PUBLIC Path to PHPMailer plugins.  This is now only useful if the SMTP class is in a different directory than the PHP include path. Plugin URI Prevents the SMTP connection from being closed after each mail sending.  If this is set to true then to close the connection requires an explicit call to SmtpClose(). Provides the ability to have the TO field process individual emails, instead of sending to entire TO addresses ReplyTo SMTP Authentication SMTP Debug SMTP Helo SMTP Host SMTP Keep Alive SMTP Password SMTP Port SMTP Secure SMTP SingleTo SMTP Timeout SMTP Username Save Changes Sender (Return-Path) Sendmail Program Sets SMTP authentication. Utilizes the Username and Password variables. Sets SMTP class debugging on or off. Sets SMTP password. Sets SMTP username. Sets connection prefix. Options are "", "ssl" or "tls" Sets the Body of the message.  This can be either an HTML or text body. If HTML then run IsHTML(true). Sets the CharSet of the message. Sets the Content-type of the message. Sets the Encoding of the message. Options for this are "8bit", "7bit", "binary", "base64", and "quoted-printable". Sets the From email address for the message. Sets the From name of the message. Sets the SMTP HELO of the message (Default is $Hostname). Sets the SMTP hosts.  All hosts must be separated by a semicolon.  You can also specify a different port for each host by using this format: [hostname:port] (e.g. "smtp1.example.com:25;smtp2.example.com"). Hosts will be tried in order. Sets the SMTP server timeout in seconds. This function will not work with the win32 version. Sets the Sender email (Return-Path) of the message.  If not empty, will be sent via -f to sendmail or as 'MAIL FROM' in smtp mode. Sets the Subject of the message. Sets the default SMTP server port. Sets the email address that a reading confirmation will be sent. Sets the hostname to use in Message-Id and Received headers and as default HELO string. If empty, the value returned by SERVER_NAME is used or 'localhost.localdomain'. Sets the message ID to be used in the Message-Id header. If empty, a unique id will be generated. Sets the path of the sendmail program. Sets the text-only body of the message.  This automatically sets the email to multipart/alternative.  This body can be read by mail clients that do not have HTML email capability such as mutt. Clients that can read HTML will view the normal Body. Sets word wrapping on the body of the message to a given number of characters. Settings Subject This plugin allows you to set almost all options of emails sent by WordPress. In fact, it just simply modified the value of the PHPMailer's member variables. Warning: This plugin is only for advanced users. You should know exactly what effect each option will have on the behavior of PHPMailer when you use this plugin. To WP Mail Options WordWrap Project-Id-Version: WP Mail Options V0.1.0
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2012-09-13 16:36+0800
PO-Revision-Date: 2012-09-13 16:40+0800
Last-Translator: Soli <soli@qq.com>
Language-Team: Soli <soli@qq.com>
Language: 
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Poedit-KeywordsList: _e;__;_;gettext;gettext_noop
X-Poedit-Basepath: .
X-Poedit-Language: Chinese
X-Poedit-Country: CHINA
X-Poedit-SourceCharset: utf-8
X-Poedit-SearchPath-0: ..
 <p>使用本插件，您可以配置从WordPress发出的邮件的几乎所有的选项。实际上，它只是简单地修改PHPMailer的成员变量。右侧给出了各选项所对应PHPMailer的成员变量的变量描述、变量类型、变量名及其默认值。</p>
<p>本插件在大部分情况下是把其成员变量的旧值用您在下面给出的新值替换；还有小部分则是在旧值后面追加新值，如To、Cc、Bcc等。</p>
<p>其中某些选项会影响另一些选项是否生效，比如“发送邮件方式”如果被设置成“mail”或“sendmail”，则后面的有关SMTP的所有选项都将失效。</p>
<p>如果您不想（或者不知道如何）设置某一项，请您把该项留空。</p>
<p><b>警告：</b>本插件只针对高级用户。在使用本插件时，你必须确切地了解各选项将会对PHPMailer的行为产生怎样的影响。</p> 关于本插件 替换邮件体 附件 作者页面 密送 邮件体 分节符 抄送 字符集 配置已更新 已读回执 消息类型（Content-type） 自定义头部 邮件优先级 邮件的优先级别(1 = 高, 3 = 中, 5 = 低) 编码 保存选项时出错 常见问题 发件人邮箱地址 发件人姓名 保存PHPMailer的版本号 主机名 发送邮件方式 消息ID 发送邮件方式："mail"、"sendmail" 或 "smtp"。 PHPMailer插件的路径 PHPMailer版本号 SMTP的属性设置 私有属性 公共属性 PHPMailer插件的路径。当SMTP类所存放的路径与PHP的include路径不一样时此参数才有用。 插件链接地址 防止每次发送邮件都关闭SMTP链接。如果此参数被设置成true，则在关闭链接时需要显式地调用SmtpClose() 为TO字段中的每个收件地址单独发送邮件，而不是一次性向TO字段中的所有邮件地址发送邮件。 回复 SMTP验证方式 调试SMTP SMTP的Helo命令 SMTP主机 保持SMTP链接 SMTP密码 SMTP端口 SMTP安全 是否单独发送 SMTP超时 SMTP用户名 保存修改 发送者（返回路径） sendmail程序 设置SMTP的验证方式。使用用户名和密码。 设置是否开启SMTP调试功能 设置SMTP密码 设置SMTP用户名 设置链接前缀（协议）。可用选项为 ""、 "ssl" 或 "tls" 设置邮件内容。HTML格式或文本格式均可。如果是HTML格式需要调用IsHTML(true) 设置邮件的字符集 设置邮件的消息类型 设置邮件的编码类型，如 "8bit", "7bit", "binary", "base64", and "quoted-printable" 设置邮件的来源地址 设置邮件的发件人姓名 设置SMTP的HELO命令参数（默认为$Hostname） 设置SMTP的主机。所有主机以分号隔开。你还可以以下列格式为每个主机指定一个不同的端口： [hostname:port] (例如： "smtp1.example.com:25;smtp2.example.com")。依次试用每个主机，直到有一个可用。 设置SMTP服务的超时时间（秒为单位）。此功能在Win32版本中无效。 设置邮件的发送者（回复路径）。如果不为空，则在发送邮件时使用sendmail的-f选项，或者在SMTP模式下使用‘MAIL FROM’命令。 设置邮件的主题 设置默认的SMTP服务端口 设置接收已读回执的邮件地址 设置主机名。该参数会在邮件头部的Message-Id字段和Received字段中使用，也会作为HELO命令的默认参数。如果为空，则使用环境变量 SERVER_NAME 的值，或者 'localhost.localdomain' 设置邮件头部 Message-Id 字段的消息ID。如果为空，则生成一个全局唯一的ID作为消息ID 设置sendmail程序的路径 设置只含文本的邮件体。设置此参数后，邮件的消息类型自动被设置为“multipart/alternative”。这种邮件体可被那些不支持HTML的邮件客户端（如mutt）读取。支持HTML的邮件客户端则显示正常的邮件体。 设置自动换行。邮件体中的某一行达到此处指定的字符数后会自动换行。 配置 主题 使用本插件，您可以配置从WordPress发出的邮件的几乎所有的选项。实际上，它只是简单地修改PHPMailer的成员变量。>警告：本插件只针对高级用户。在使用本插件时，你必须确切地了解各选项将会对PHPMailer的行为产生怎样的影响。 收件人 邮件选项 自动换行 