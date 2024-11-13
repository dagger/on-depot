# This file generated by `dagger_codegen`. Please DO NOT EDIT.
defmodule Dagger.TypeDefKind do
  @moduledoc "Distinguishes the different kinds of TypeDefs."

  @type t() ::
          :STRING_KIND
          | :INTEGER_KIND
          | :BOOLEAN_KIND
          | :SCALAR_KIND
          | :LIST_KIND
          | :OBJECT_KIND
          | :INTERFACE_KIND
          | :INPUT_KIND
          | :VOID_KIND
          | :ENUM_KIND

  @doc "A string value."
  @spec string_kind() :: :STRING_KIND
  def string_kind(), do: :STRING_KIND

  @doc "An integer value."
  @spec integer_kind() :: :INTEGER_KIND
  def integer_kind(), do: :INTEGER_KIND

  @doc "A boolean value."
  @spec boolean_kind() :: :BOOLEAN_KIND
  def boolean_kind(), do: :BOOLEAN_KIND

  @doc "A scalar value of any basic kind."
  @spec scalar_kind() :: :SCALAR_KIND
  def scalar_kind(), do: :SCALAR_KIND

  @doc """
  A list of values all having the same type.

  Always paired with a ListTypeDef.
  """
  @spec list_kind() :: :LIST_KIND
  def list_kind(), do: :LIST_KIND

  @doc """
  A named type defined in the GraphQL schema, with fields and functions.

  Always paired with an ObjectTypeDef.
  """
  @spec object_kind() :: :OBJECT_KIND
  def object_kind(), do: :OBJECT_KIND

  @doc """
  A named type of functions that can be matched+implemented by other objects+interfaces.

  Always paired with an InterfaceTypeDef.
  """
  @spec interface_kind() :: :INTERFACE_KIND
  def interface_kind(), do: :INTERFACE_KIND

  @doc "A graphql input type, used only when representing the core API via TypeDefs."
  @spec input_kind() :: :INPUT_KIND
  def input_kind(), do: :INPUT_KIND

  @doc """
  A special kind used to signify that no value is returned.

  This is used for functions that have no return value. The outer TypeDef specifying this Kind is always Optional, as the Void is never actually represented.
  """
  @spec void_kind() :: :VOID_KIND
  def void_kind(), do: :VOID_KIND

  @doc """
  A GraphQL enum type and its values

  Always paired with an EnumTypeDef.
  """
  @spec enum_kind() :: :ENUM_KIND
  def enum_kind(), do: :ENUM_KIND

  @doc false
  @spec from_string(String.t()) :: t()
  def from_string(string)

  def from_string("STRING_KIND"), do: :STRING_KIND
  def from_string("INTEGER_KIND"), do: :INTEGER_KIND
  def from_string("BOOLEAN_KIND"), do: :BOOLEAN_KIND
  def from_string("SCALAR_KIND"), do: :SCALAR_KIND
  def from_string("LIST_KIND"), do: :LIST_KIND
  def from_string("OBJECT_KIND"), do: :OBJECT_KIND
  def from_string("INTERFACE_KIND"), do: :INTERFACE_KIND
  def from_string("INPUT_KIND"), do: :INPUT_KIND
  def from_string("VOID_KIND"), do: :VOID_KIND
  def from_string("ENUM_KIND"), do: :ENUM_KIND
end
