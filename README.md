# plugin-widget_page
이 어플리케이션은 Xpressengine3(이하 XE3)의 플러그인입니다.

이 플러그인은 XE3에서 위젯 페이지 기능을 제공합니다.

XE3 사이트에 하나의 페이지를 생성할 수 있으며, XE3에 등록된 위젯을 생성된 페이지에 배치할 수 있습니다.
우선 페이지를 원하는 레이아웃으로 구성한 다음, 위젯을 추가할 수 있습니다.

[![License](http://img.shields.io/badge/license-GNU%20LGPL-brightgreen.svg)]

# Installation
### Console
```
$ php artisan plugin:install widget_page
```

### Web install
- 관리자 > 플러그인 & 업데이트 > 플러그인 목록 내에 새 플러그인 설치 버튼 클릭
- `widget_page` 검색 후 설치하기

### Ftp upload
- 다음의 페이지에서 다운로드
    * https://store.xpressengine.io/plugins/widget_page
    * https://github.com/xpressengine/plugin-widget_page/releases
- 프로젝트의 `plugins` 디렉토리 아래 `widget_page` 디렉토리명으로 압축해제
- `widget_page` 디렉토리 이동 후 `composer dump` 명령 실행

# Usage
## 위젯 페이지 생성하기
관리자 > 사이트 맵> 사이트 메뉴 편집에서 `아이템 추가` 기능으로 위젯 페이지를 추가해서 사용합니다.
위젯 페이지 추가는 아래 순서로 가능합니다.
1. `아이템 추가` 클릭
2. `Widget Page` 선택 후 하단에 `다음` 클릭
3. itemURL, Item Title 등 세부사항 입력
4. 등록

## 위젯 페이지 편집하기
생성된 위젯 페이지로 이동합니다. 회면에 [편집하기] 버튼을 클릭하면 편집페이지창이 출력됩니다.
편집페이지에서 원하는 레이아웃으로 페이지를 구성한 후,
원하는 셀에 위젯을 추가하십시오.

- 편집 중인 페이지를 적용하기 전에 [미리보기]할 수 있습니다. 미리보기를 할 경우, 본 페이지의 내용이 편집 중인 상태로 보여집니다.
- 편집 중인 내용을 [저장]하면 실제 페이지에 적용됩니다. 

## License
이 플러그인은 LGPL라이선스 하에 있습니다. <https://opensource.org/licenses/LGPL-2.1>
