package main

import (
	"fmt"
)

func main() {
	fmt.Println("Hello, playground")
	var asuman [3]string

	for i := 0; i < 3; i++ {
		asuman[i] = "asuman element"
	}

	for i, j := range asuman {
		fmt.Println(i, j)
	}

	asuman2 := map[int]string{
		1: "asuman",
		2: "aydın",
		3: "homework",
	}

	for key, value := range asuman2 {
		fmt.Println(key, value)
	}

	channel_asuman := make(chan string)
	go func() {
		channel_asuman <- "asuman"
		channel_asuman <- "aydın"
		close(channel_asuman )
	}()

	for i := range channel_asuman {
		fmt.Println(i)
	}
}
