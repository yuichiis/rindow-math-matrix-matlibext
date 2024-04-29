Rindow Math Matrix's Drivers for Matlib with PHP extensions
===========================================================
Status:
[![Build Status](https://github.com/rindow/rindow-math-matrix-matlibext/workflows/tests/badge.svg)](https://github.com/rindow/rindow-math-matrix-matlibext/actions)
[![Downloads](https://img.shields.io/packagist/dt/rindow/rindow-math-matrix-matlibext)](https://packagist.org/packages/rindow/rindow-math-matrix-matlibext)
[![Latest Stable Version](https://img.shields.io/packagist/v/rindow/rindow-math-matrix-matlibext)](https://packagist.org/packages/rindow/rindow-math-matrix-matlibext)
[![License](https://img.shields.io/packagist/l/rindow/rindow-math-matrix-matlibext)](https://packagist.org/packages/rindow/rindow-math-matrix-matlibext)

IMPORTANT
=========
This package is matlib drivers for Rindow-math-matrix. These drivers act as adapters to drive PHP extensions. Each PHP extension requires a separate download and installation of a binary file appropriate for your environment's PHP version and OS version.

Currently, Rindow-math-matrix has stopped using PHP-extension and has moved to using FFI.

- [Rindow Math Matrix's Drivers for Matlib with PHP FFI](https://github.com/rindow/rindow-math-matrix-matlibffi)

However, I left the option of using PHP-extension in case FFI is not available for some reason. This package allows you to use PHP-extension with Rindow-mat-matrix.

Overview
========
Rindow Math Matrix is the fundamental package for scientific matrix operation

- A powerful N-dimensional array object
- Sophisticated (broadcasting) functions
- Tools for integrating C/C++ through the FFI (or PHP extensions)
- Useful linear algebra and random number capabilities

Please see the documents on [Rindow mathematics projects](https://rindow.github.io/mathematics/) web pages.

Rindow Math Matrix's repository is [here](https://github.com/rindow/rindow-math-matrix/).

Requirements
============

- PHP 8.1 or PHP8.2 or PHP8.3
- Rindow Math Matrix v2.0
- Rindow OpenBLAS PHP extension v0.4 (and OpenBLAS 0.3.20 or later)
- Rindow OpenCL PHP extension v0.2 (and OpenCL 1.1 or later)
- Rindow CLBlast PHP extension v0.2 (and CLBlast 1.5.2 or later)
- Windows 10/11 or Ubuntu 20.04 Debian 12 or later

### Download pre-build binaries

You can perform very fast N-dimensional array operations in conjunction

- Pre-build binaries
  - [Rindow OpenBLAS extension](https://github.com/rindow/rindow-openblas/releases)
  - [Rindow OpenCL extension](https://github.com/rindow/rindow-opencl/releases)
  - [Rindow CLBlast extension](https://github.com/rindow/rindow-clblast/releases)
  - [OpenBLAS](https://github.com/OpenMathLib/OpenBLAS/releases)
  - [CLBlast](https://github.com/CNugteren/CLBlast/releases)

### Acceleration with GPU

You can use GPU acceleration on OpenCL.

*Note:*

This OpenCL support extension works better in your environment and helps speed up your laptop environment without n-NVIDIA.

Tested on Ivy-bridge and AMD's Bobcat architecture APU.

In the Windows environment, Integrated GPU usage was more effective than CPU, and it worked comfortably.

However, OLD AMD APU on Linux, libclc used in linux standard mesa-opencl-icd is very buggy and slow.
If you have testable hardware, please test using the proprietary driver.

On the other hand, I tested with Ivy-bridge of Intel CPU and Integrated GPU.

It now works comfortably with various adjustments on Windows 10 Standard OpenCL Driver. However, the old Intel Integrated GPU is not very high compared to its CPU performance, so please use the right person in the right place.

And it worked fine and fast in Ubuntu 20.04 + beignet-opencl-icd environment.
