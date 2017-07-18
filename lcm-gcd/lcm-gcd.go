package main

import (
	"fmt"
)

/**
最小公倍数
 */
func lcm(a int, b int) int {
	return a * b / gcd(a, b)
}

/**
最大公約数
 */
func gcd(a int, b int) int {
	if b == 0 {
		return a
	}
	return gcd(b, a % b)
}

func main() {
	fmt.Println(lcm(6, 4))
}