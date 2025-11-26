import { Button, Html } from "@react-email/components";
import { Tailwind } from "@react-email/tailwind";
import * as React from "react";

export default function Email() {
  return (
    <Tailwind>
      <Html>
        <Button
          href="https://example.com"
          style={{ background: "#000", color: "#fff", padding: "12px 20px" }}
        >
          Click me
        </Button>
      </Html>
    </Tailwind>
  );
}