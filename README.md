# heartbeat.d
### gitlab設定
heartbeat/monitors.d
在gitlab綁SSH key <br>
 http://gitlab-outside.vir888.com/monitors/heartbeat.d <br>
並clone下載檔案 <br>
git clone ssh://git@gitlab-outside.vir888.com:20022/monitors/heartbeat.d.git <br>
  

### 也可以去ssh outlog看設定
yu-hua@CY0015442-YU-HUA ~ % ssh yu-hua@10.249.53.12 <br>
Last login: Tue Jun  9 11:43:52 2020 from 192.168.80.133 <br>
yu-hua@sz-border.rd6.prod[~]$ ssh rd6-admin@127.0.0.1 <br>
Last login: Tue Jun  9 13:38:28 2020 from localhost <br>
rd6-admin@sz-border.rd6.prod[線上行為務必通知窗口][~]$ ssh outlog <br>
Last login: Tue Jun  9 13:40:10 2020 from 172.17.1.18 <br>
rd6-admin@out-log.pid.prod[~]$cd ~/heartbeat/monitors.d <br>
