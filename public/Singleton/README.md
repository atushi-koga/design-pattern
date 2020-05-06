## Singletonパターン
`あるクラスに対してインスタンスが1つしか存在しないことを保証し、それにアクセスするためのグローバルな方法を提供する。`

Singletonパターンを適用するとインスタンスが1つしか生成されないことが保証される。
PHPの場合、オブジェクトを複製するためのcloneキーワードが用意されているため、Singletonパターンを使う場合、
__cloneメソッドをオーバーライドし例外を発生するなどの対策が必要になる。

![singleton](https://user-images.githubusercontent.com/20272076/81165758-7dcee480-8fcd-11ea-9a8c-d357768a25b2.png)
