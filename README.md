<p align="center">
<img src=".github/misc/logo.png"/>
                    <h3>A Phishing tool of PUBG,BGMI and FF EVENT</h3>
</p>
<h3><p align="center">Disclaimer</p></h3>

<i>Any actions and or activities related to <b>EDU-TOOLKIT</b> are solely your responsibility. The misuse of this toolkit can result in <b>disciplinary action</b> brought against the persons in question. <b>The creators will not be held responsible</b> in the event any consequences arise from individuals misusing this toolkit to break ethical guidelines.

<b>This toolkit contains materials that are meant for educational purposes only</b>. Please refer to the laws and ethical standards in your region before accessing, using, or in any other way utilizing this toolkit.

<b>This Tool is made for educational purposes only</b>. Do not attempt to engage in any illegal or unethical activities with anything contained here. <b>If this is your intention, then refrain from using this toolkit</b>!

It only demonstrates "how certain technologies work". <b>You shall not misuse the information to compromise the security or privacy of others</b>. However, you may explore and learn at your own risk.</i>
##

### Features

- Latest and updated login pages.
- Beginners friendly
- Multiple tunneling options
  - Localhost
  - Cloudflared
  - LocalXpose
- Docker support

##

### Installation

- Just, Clone this repository -
  ```
  git clone --depth=1 https://github.com/07iamravi/x-zone.git
  ```

- Now go to cloned directory and run `x-zone.sh` -
  ```
  $ cd x-zone
  $ bash x-zone.sh
  ```

- On first launch, It'll install the dependencies and that's it. ***x-zone*** is installed.

##

### Installation (Termux)
You can easily install x-zone in Termux 
```
$ pkg install git
$ git clone https://github.com/07iamravi/x-zone.git
$ cd x-zone
$ bash x-zone.sh
```
### A Note : 
***Termux discourages hacking*** .. So never discuss anything related to *x-zone* in any of the termux discussion groups. For more check : [wiki](https://wiki.termux.com/wiki/Hacking)

##

<p align="left">
  <a href="https://shell.cloud.google.com/cloudshell/open?cloudshell_git_repo=https://github.com/07iamravi/x-zone.git&tutorial=README.md" target="_blank"><img src="https://gstatic.com/cloudssh/images/open-btn.svg"></a>
</p>

##

### Installation via ".deb" file

- Download `.deb` files from the [**Latest Release**](https://github.com/07iamravi/x-zone/releases/latest)
- If you are using ***termux*** then download the `*_termux.deb`

- Install the `.deb` file by executing
  ```
  apt install <your path to deb file>
  ```
  Or
  ```
  $ dpkg -i <your path to deb file>
  $ apt install -f
  ```

##

### Run on Docker

- Docker Image Mirror:
  - **DockerHub** : 
    ```
    docker pull 07iamravi/x-zone
    ```
  - **GHCR** : 
    ```
    docker pull ghcr.io/07iamravi/x-zone:latest
    ```

- By using the wrapper script [**run-docker.sh**](https://raw.githubusercontent.com/07iamravi/x-zone/master/run-docker.sh)

  ```
  $ curl -LO https://raw.githubusercontent.com/07iamravi/x-zone/master/run-docker.sh
  $ bash run-docker.sh
  ```
- Temporary Container

  ```
  docker run --rm -ti 07iamravi/x-zone
  ```
  - Remember to mount the `auth` directory.

##

<details>
  <summary><h3>Dependencies</h3></summary>

<b>x-zone</b> requires following programs to run properly - 
- `git`
- `curl`
- `php`

> All the dependencies will be installed automatically when you run **x-zone** for the first time.
</details>

<details>
  <summary><h3>Tested on</h3></summary>

- **Ubuntu**
- **Debian**
- **Arch**
- **Manjaro**
- **Fedora**
- **Termux**
</details>

##
