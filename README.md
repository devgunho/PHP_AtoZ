![image](https://user-images.githubusercontent.com/41619898/74754326-cb805e80-52b4-11ea-9f7c-ffaa34676bdc.png)

**PHP is a popular general-purpose scripting language that is especially suited to web development.**

**It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.**

&nbsp;

---

&nbsp;

### Development Environment

> XAPMPP in Windows 10 : https://www.apachefriends.org/index.html

![image](https://user-images.githubusercontent.com/41619898/81622842-0bc32900-942d-11ea-9c39-5a53dfdef2cb.png)

&nbsp;

### Debugging Environment

`.vscode/lauch.json`

```
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9000
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9000
        }
    ]
}
```