# PHP Recursive Function with Potential Infinite Recursion

This repository demonstrates a common bug in PHP recursive functions: infinite recursion due to circular references in input data.  The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version.

The original code processes nested arrays recursively but doesn't handle cases where the input data contains circular references, leading to a stack overflow error.

The solution introduces a mechanism to detect and prevent processing of circular references, thus preventing infinite recursion.
