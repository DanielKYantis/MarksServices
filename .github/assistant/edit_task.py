#!/usr/bin/env python3
"""
Assistant edit task runner.

This file is intentionally small and text-only so ChatGPT can update it through
the GitHub connector. The assistant-editor workflow executes this script inside
a full GitHub Actions checkout, allowing safe edits to large PHP/asset-adjacent
files without relying on truncated connector payloads.
"""

from pathlib import Path

ROOT = Path(__file__).resolve().parents[2]


def main() -> None:
    print("Assistant edit task is installed and ready.")
    print(f"Repository root: {ROOT}")
    print("No edits requested in this placeholder task.")


if __name__ == "__main__":
    main()
