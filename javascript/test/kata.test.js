const { add } = require("../src/add.fn");

describe("Add function tests", () => {
  it("should return zero when input is empty", () => {
    const result = add("");
    expect(result).toBe(0);
  });

  it("should return a number when a single number string is given", () => {
    const result = add("1");
    expect(result).toBe(1);
  });

  it("should return the sum of two numbers with the default separator", () => {
    const result = add("1,2");
    expect(result).toBe(3);
  });

  it("should return the sum of more than two numbers with the default separator", () => {
    const result = add("1,2,3");
    expect(result).toBe(6);
  });

  it("should return the sum of numbers with new line separator", () => {
    const result = add("1\n2");
    expect(result).toBe(3);
  });

  it("should return the sum of numbers with different separators", () => {
    const result = add("1\n2,3");
    expect(result).toBe(6);
  });
});
